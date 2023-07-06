<?php

namespace Api\V8\JsonApi\Response;

class LinksResponse implements \JsonSerializable
{
    /**
     * @var string
     */
    private $self;

    /**
     * @var string|array
     */
    private $related;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        $response = [
            'self' => $this->getSelf(),
            'related' => $this->getRelated()
        ];

        return array_filter($response);
    }

    /**
     * @return string
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @param string $self
     */
    public function setSelf($self)
    {
        $this->self = $self;
    }

    /**
     * @return array|string
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * @param array|string $related
     */
    public function setRelated($related)
    {
        $this->related = $related;
    }
}
