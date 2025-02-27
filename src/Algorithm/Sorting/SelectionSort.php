<?php
declare(strict_types=1);
/**
 * MIT License
 *
 * Copyright (c) 2018 Dogan Ucar
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace doganoo\PHPAlgorithms\Algorithm\Sorting;

use doganoo\PHPAlgorithms\Common\Interfaces\ISortable;
use doganoo\PHPAlgorithms\Common\Util\Comparator;
use function array_values;
use function count;

/**
 * Class SelectionSort
 *
 * @package doganoo\PHPAlgorithms\Algorithm\Sorting
 */
class SelectionSort implements ISortable {

    /**
     * sorts an array with selection sort.
     *
     * Actually works only with numeric indices
     *
     * @param array $array
     * @return array
     */
    public function sort(array $array): array {
        $array = array_values($array);
        $length = count($array);

        if (0 === $length || 1 === $length) return $array;

        for ($i = 0; $i < $length; $i++) {
            $min = $i;
            for ($j = $i; $j < $length; $j++) {
                if (Comparator::lessThan($array[$j], $array[$min])) {
                    $min = $j;
                }
            }
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }
        return $array;
    }
}