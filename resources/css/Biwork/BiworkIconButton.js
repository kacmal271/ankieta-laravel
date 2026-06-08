//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

/**
 * Biwork Icon Button
 * 
 * static parameters
 *   anchorLink
 *   imageSource
 */

"use strict";

// [A]
const innerHTML = `
		
	<div class="bi-inline-block">

		<a class="bi-flexbox-no-media bi-flexbox-horizontal-no-media bi-flexbox-vertical-no-media bi-child-pr-1 bi-p-1 bi-w-max-256 bi-button bi-button-route">

			<div class="bi-inline-block-middle bi-icon-holder-64">

				<img class="bi-inline-block-middle bi-w-100" />

			</div>

			<div class="bi-font-xl">

				<span>
				
					<slot></slot>
				
				</span>

			</div>
		
		</a>

	</div>
	
`;

//-----------------------------------------------------------------------------

/**
 * extends HTMLElement
 */

export class BiworkIconButton extends HTMLElement
{
	
	//*****************************************************************************
	
	constructor()
	{
		super(); // cannot: this.super()
	}
	
	//*****************************************************************************
	
	/**
	 * only dynamic attributes
	 * 
	 * static attributes not included
	 * # anchorLink
	 * # imageSource
	 * 
	 * HTMLElement member function override
	 */
	
	static get observedAttributes() /* override */
	{
		return [""];
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
		
		console.log('added object: Biwork Icon Button');
		
		// remember the <slot></slot>
		
		// load all children elements w/o attribute: slot=""
		const slot = this.innerHTML;
		
		// assign pre-prepared HTML to: this
		
		// load light DOM (not shadow DOM)
		this.innerHTML = innerHTML;
		
		// assign the slot value
		
		this.querySelector('slot').innerHTML = slot;
		
		// remember interactive elements
		
		// lifecycle events
		// handle (call function) attribute event (class-alike) manually
		this.anchor = this.querySelector("a");
		this.image = this.querySelector("img");
	
		this.anchor.addEventListener('click', () => {
		
			this.redirect();
			
		});

		// set arguments from custom-component parameter list
		this.anchor.href = this.getAttribute("anchorLink");
		this.image.src = this.getAttribute("imageSource");
	}
	
	//*****************************************************************************
	
	/**
	 * HTMLElement member function override
	 * aka callback member function
	 */
	
	// (B)
	
	disconnectedCallback() /* override */
	{
		console.log('added object: Biwork Icon Button');
	}
	
	//*****************************************************************************
	
	/**
	 * HTMLElement member function override
	 * aka callback member function
	 */
	
	attributeChangedCallback(name, oldValue, newValue) /* override */
	{
		
	}
	
	//*****************************************************************************
	
	redirect()
	{
		
	}
	
	//*****************************************************************************
	
	/**
	 * helper member function
	 */
	
	updateChecked(value)
	{
		
	}
}

// convention: hyphened HTMLElement is programmer-defined
// built-ins are never hyphened
customElements.define('biwork-icon-button', BiworkIconButton);

// (B) call: disconnectedCallback
// item.remove();