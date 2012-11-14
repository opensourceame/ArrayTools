<?php
/**
 *
 * @author David Kelly
 *
 */

namespace opensourceame;

class ArrayTools
{
	const		version		= '1.0.1';

	/**
	 * Convert an object into a multidimensional array
	 *
	 * @param  object $object
	 * @return array
	 */
	static public function objectToArray( $object )
	{
		if ( (! is_object($object)) and (! is_array( $object )))
		{
			return $object;
		}

		if (is_object($object))
		{
			$object = get_object_vars($object);
		}

		return array_map('\opensourceame\arrayUtils::objectToArray', $object);
	}
}
