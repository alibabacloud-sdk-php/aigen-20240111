<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\SDK\Aigen\V20240111\Models\InteractiveScribbleSegmentationResponseBody\data;
use AlibabaCloud\Tea\Model;

class InteractiveScribbleSegmentationResponseBody extends Model
{
    /**
     * @var data
     */
    public $data;

    /**
     * @example 7574ee8f-38a3-4b1e-9280-11c33ab46e51
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InteractiveScribbleSegmentationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
