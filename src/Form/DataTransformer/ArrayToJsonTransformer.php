<?php
namespace App\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class ArrayToJsonTransformer implements DataTransformerInterface
{
    public function transform($value): mixed
    {
        // If the value is already an array (or null/empty), just return it as is
        if (is_array($value) || null === $value) {
            return $value;
        }

        // Decode the JSON string to an array
        $decodedJson = json_decode($value, true);

        // If decoding fails, it's safe to assume it wasn't a valid JSON string
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new TransformationFailedException('Invalid JSON data.');
        }

        return $decodedJson;
    }

    public function reverseTransform($value): mixed
    {
        // If the value is a string (indicating it might already be JSON), just return it
        if (is_string($value)) {
            return $value;
        }

        // If the value is an array, encode it to a JSON string
        if (is_array($value)) {
            $encodedJson = json_encode($value);

            // Check for JSON encoding errors
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new TransformationFailedException('Error encoding JSON.');
            }

            return $encodedJson;
        }

        // For other types, or if the array is empty, return null or an empty JSON object/string
        return null;
    }
}

