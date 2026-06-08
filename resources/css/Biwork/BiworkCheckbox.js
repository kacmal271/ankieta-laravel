//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Biwork Checkbox
 * 
 * attributes
 *   class : string, simply use it on the custom-component
 * 
 * static parameters
 *   checkboxName : string, name for innerHTML input checkbox
 *   disables : string, attribute:id for disabled (grayed out) element
 *     somewhere else on the page
 */

"use strict"

const innerHTML = `
		
	<!-- data title: conventional attribute used by custom markup -->
	<!-- data title: used by Web Components HTML5 suite -->
	
	<label class="bi-checkbox">
			
		<div class="bi-checkbox-positioner">
		
			<input type="checkbox" value="1" />
			
			<div class="bi-checkbox-container"></div>
		
		</div>
		
		<span class="bi-checkbox-text">
		
			<slot></slot>
		
		</span>
			
	</label>
		
`;

//-----------------------------------------------------------------------------

/**
 * extends HTMLElement
 */

export class BiworkCheckbox extends HTMLElement
{
	
	//*****************************************************************************
	
	constructor()
	{
		// cannot: this.super()
		super();
	}
	
	//*****************************************************************************
	
	/**
	 * only dynamic attributes
   * 
   * static attributes not included
   * # checkboxName
   * # disables
	 * 
	 * HTMLElement member function override
	 */
	
	static get observedAttributes() /* override */
	{
		return ["checked"];
	}
	
	//*****************************************************************************
	
	/**
	 * dynamic constructor
   * this.getAttribute() works here
	 * 
	 * HTMLElement member function override
	 * aka callback member function
	 */
	
	connectedCallback() /* override */
	{
		// Prevent clearing on re-connection
    if (this.hasAttribute('hydrated'))
		{
			return;
		}
		
    this.setAttribute('hydrated', '');
		
		console.log('added object: Biwork Checkbox');
		
		// remember the <slot></slot>
		
		// load all children elements w/o attribute: slot=""
		const slot = this.innerHTML;
		
		// assign pre-prepared HTML to: this
		
		// load light DOM (not shadow DOM)
		this.innerHTML = innerHTML;
		
		// assign the slot value
		
		this.querySelector('slot').innerHTML = slot;
		
		// lifecycle events
		// handle (call function) attribute event (class-alike) manually
		this.checkbox = this.querySelector("input");
		
		// Initialize from HTML attribute if written in index.html
		const initialChecked = this.getAttribute('checked') === 'true';
		this.checkbox.checked = initialChecked;

    // check if should be initially disabled
		this.disableElement(initialChecked);
		
		this.checkbox.addEventListener('change', () => {
		
			const isChecked = this.checkbox.checked;
			
			// Keep attribute in sync with front-end
			this.setAttribute("checked", isChecked);
			
			this.disableElement(isChecked);
			
		});

    // give form name
    this.checkbox.name = this.getAttribute("checkboxName");
	}
	
	//*****************************************************************************
	
	/**
	 * HTMLElement member function override
	 * aka callback member function
	 */
	
	// (B)
	
	disconnectedCallback() /* override */
	{
		console.log('removed object: Biwork Checkbox');
	}
	
	//*****************************************************************************
	
	/**
	 * HTMLElement member function override
	 * aka callback member function
	 */
	
	attributeChangedCallback(name, oldValue, newValue) /* override */
	{
		// attribute name checked
		if (name === "checked")
		{
			this.updateChecked(newValue);
		}
	}
	
	//*****************************************************************************
	
	disableElement(isChecked)
	{
    const element = document.getElementById(`${this.getAttribute("disables")}`);

    if (element != null)
    {
		  element.disabled = ! isChecked;
    }
	}
	
	//*****************************************************************************
	
	/**
	 * helper member function
	 */
	
	updateChecked(value)
	{
		// check if false or missing
		const isChecked = value != null && value !== "false";
		
		this.checkbox.checked = isChecked;
		
		this.disableElement(isChecked);
	}
}

// convention: hyphened HTMLElement is programmer-defined
// built-ins are never hyphened
customElements.define('biwork-checkbox', BiworkCheckbox);

// (B) call: disconnectedCallback
// item.remove();