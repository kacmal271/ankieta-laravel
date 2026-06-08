export function dd($object)
{
  $object = $object ?? "undefined";

  console.log(`****************************************`);
  console.log(`dumping object...`);
  console.log($object);

  throw "dump and die";
}