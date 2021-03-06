<?hh
// @generated by docskel.php

/**
 * Normalization is a process that involves transforming characters and
 * sequences of characters into a formally-defined underlying representation.
 * This process is most important when text needs to be compared for sorting
 * and searching, but it is also used when storing text to ensure that the
 * text is stored in a consistent representation.   The Unicode Consortium has
 * defined a number of normalization forms reflecting the various needs of
 * applications:  Normalization Form D (NFD) - Canonical Decomposition
 * Normalization Form C (NFC) - Canonical Decomposition followed by Canonical
 * Composition   Normalization Form KD (NFKD) - Compatibility Decomposition
 * Normalization Form KC (NFKC) - Compatibility Decomposition followed by
 * Canonical Composition   The different forms are defined in terms of a set
 * of transformations on the text, transformations that are expressed by both
 * an algorithm and a set of data files.
 */
class Normalizer {
  /**
   * Checks if the provided string is already in the specified normalization
   *    form.
   *
   *
   * @param string $input - The input string to normalize
   * @param string $form - One of the normalization forms.
   *
   * @return bool - TRUE if normalized, FALSE otherwise or if there an
   *   error
   */
  <<__Native>>
  public static function isNormalized(string $input,
                                      int $form = Normalizer::FORM_C): mixed;

  /**
   * Normalizes the input provided and returns the normalized string
   *
   *
   * @param string $input - The input string to normalize
   * @param string $form - One of the normalization forms.
   *
   * @return string - The normalized string or NULL if an error occurred.
   */
  <<__Native>>
  public static function normalize(string $input,
                                   int $form = Normalizer::FORM_C): mixed;

}

/**
 * Checks if the provided string is already in the specified normalization
 *    form.
 *
 *
 * @param string $input - The input string to normalize
 * @param string $form - One of the normalization forms.
 *
 * @return bool - TRUE if normalized, FALSE otherwise or if there an
 *   error
 */
function normalizer_is_normalized(string $input,
                                  int $form = Normalizer::FORM_C): mixed {
  return Normalizer::isNormalized($input, $form);
}

/**
 * Normalizes the input provided and returns the normalized string
 *
 *
 * @param string $input - The input string to normalize
 * @param string $form - One of the normalization forms.
 *
 * @return string - The normalized string or NULL if an error occurred.
 */
function normalizer_normalize(string $input,
                              int $form = Normalizer::FORM_C): mixed {
  return Normalizer::normalize($input, $form);
}

