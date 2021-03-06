<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateParagraph
 *
 * @method string getResourceOwnerId()
 * @method string getNoteId()
 * @method string getText()
 */
class CreateParagraphRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'CreateParagraph',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $noteId
     *
     * @return $this
     */
    public function setNoteId($noteId)
    {
        $this->requestParameters['NoteId'] = $noteId;
        $this->queryParameters['NoteId'] = $noteId;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->requestParameters['Text'] = $text;
        $this->queryParameters['Text'] = $text;

        return $this;
    }
}
