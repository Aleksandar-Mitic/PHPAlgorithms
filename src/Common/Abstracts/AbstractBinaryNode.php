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

namespace doganoo\PHPAlgorithms\Common\Abstracts;

use doganoo\PHPAlgorithms\Common\Interfaces\IBinaryNode;

/**
 * Class AbstractBinaryNode
 * @package doganoo\PHPAlgorithms\Common\Abstracts
 */
abstract class AbstractBinaryNode extends AbstractNode implements IBinaryNode {
    /** @var AbstractBinaryNode $right */
    private $right = null;
    /** @var AbstractBinaryNode $left */
    private $left = null;

    public function __construct($value = null) {
        parent::__construct($value);
    }

    /**
     * @return IBinaryNode|null
     */
    public function getLeft(): ?IBinaryNode{
        return $this->left;
    }

    /**
     * @param IBinaryNode|null $node
     */
    public function setLeft(?IBinaryNode $node): void{
        $this->left = $node;
    }

    /**
     * @return IBinaryNode|null
     */
    public function getRight(): ?IBinaryNode{
        return $this->right;
    }

    /**
     * @param IBinaryNode|null $node
     */
    public function setRight(?IBinaryNode $node): void{
        $this->right = $node;
    }

    public function jsonSerialize() {
        return array_merge(
            parent::jsonSerialize()
            , [
                "left" => $this->getLeft()
                , "right" => $this->getRight()
            ]
        );
    }

}