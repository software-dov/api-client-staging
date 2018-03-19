<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace GPBMetadata\Google\Cloud\Iot\V1;

class DeviceManager
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad2240a28676f6f676c652f636c6f75642f696f742f76312f6465766963" .
            "655f6d616e616765722e70726f746f1213676f6f676c652e636c6f75642e" .
            "696f742e76311a23676f6f676c652f636c6f75642f696f742f76312f7265" .
            "736f75726365732e70726f746f1a1e676f6f676c652f69616d2f76312f69" .
            "616d5f706f6c6963792e70726f746f1a1a676f6f676c652f69616d2f7631" .
            "2f706f6c6963792e70726f746f1a1b676f6f676c652f70726f746f627566" .
            "2f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f" .
            "6669656c645f6d61736b2e70726f746f226b0a1b43726561746544657669" .
            "6365526567697374727952657175657374120e0a06706172656e74180120" .
            "012809123c0a0f6465766963655f726567697374727918022001280b3223" .
            "2e676f6f676c652e636c6f75642e696f742e76312e446576696365526567" .
            "697374727922280a18476574446576696365526567697374727952657175" .
            "657374120c0a046e616d65180120012809222b0a1b44656c657465446576" .
            "696365526567697374727952657175657374120c0a046e616d6518012001" .
            "2809228c010a1b5570646174654465766963655265676973747279526571" .
            "75657374123c0a0f6465766963655f726567697374727918012001280b32" .
            "232e676f6f676c652e636c6f75642e696f742e76312e4465766963655265" .
            "676973747279122f0a0b7570646174655f6d61736b18022001280b321a2e" .
            "676f6f676c652e70726f746f6275662e4669656c644d61736b22540a1b4c" .
            "6973744465766963655265676973747269657352657175657374120e0a06" .
            "706172656e7418012001280912110a09706167655f73697a651802200128" .
            "0512120a0a706167655f746f6b656e18032001280922770a1c4c69737444" .
            "657669636552656769737472696573526573706f6e7365123e0a11646576" .
            "6963655f7265676973747269657318012003280b32232e676f6f676c652e" .
            "636c6f75642e696f742e76312e446576696365526567697374727912170a" .
            "0f6e6578745f706167655f746f6b656e18022001280922520a1343726561" .
            "746544657669636552657175657374120e0a06706172656e741801200128" .
            "09122b0a0664657669636518022001280b321b2e676f6f676c652e636c6f" .
            "75642e696f742e76312e44657669636522500a1047657444657669636552" .
            "657175657374120c0a046e616d65180120012809122e0a0a6669656c645f" .
            "6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e46" .
            "69656c644d61736b22730a13557064617465446576696365526571756573" .
            "74122b0a0664657669636518022001280b321b2e676f6f676c652e636c6f" .
            "75642e696f742e76312e446576696365122f0a0b7570646174655f6d6173" .
            "6b18032001280b321a2e676f6f676c652e70726f746f6275662e4669656c" .
            "644d61736b22230a1344656c65746544657669636552657175657374120c" .
            "0a046e616d6518012001280922a7010a124c697374446576696365735265" .
            "7175657374120e0a06706172656e7418012001280912160a0e6465766963" .
            "655f6e756d5f69647318022003280412120a0a6465766963655f69647318" .
            "0320032809122e0a0a6669656c645f6d61736b18042001280b321a2e676f" .
            "6f676c652e70726f746f6275662e4669656c644d61736b12110a09706167" .
            "655f73697a6518642001280512120a0a706167655f746f6b656e18652001" .
            "2809225c0a134c69737444657669636573526573706f6e7365122c0a0764" .
            "65766963657318012003280b321b2e676f6f676c652e636c6f75642e696f" .
            "742e76312e44657669636512170a0f6e6578745f706167655f746f6b656e" .
            "18022001280922600a204d6f64696679436c6f7564546f44657669636543" .
            "6f6e66696752657175657374120c0a046e616d6518012001280912190a11" .
            "76657273696f6e5f746f5f75706461746518022001280312130a0b62696e" .
            "6172795f6461746118032001280c22450a1f4c697374446576696365436f" .
            "6e66696756657273696f6e7352657175657374120c0a046e616d65180120" .
            "01280912140a0c6e756d5f76657273696f6e73180220012805225d0a204c" .
            "697374446576696365436f6e66696756657273696f6e73526573706f6e73" .
            "6512390a0e6465766963655f636f6e6669677318012003280b32212e676f" .
            "6f676c652e636c6f75642e696f742e76312e446576696365436f6e666967" .
            "223b0a174c69737444657669636553746174657352657175657374120c0a" .
            "046e616d6518012001280912120a0a6e756d5f7374617465731802200128" .
            "0522530a184c697374446576696365537461746573526573706f6e736512" .
            "370a0d6465766963655f73746174657318012003280b32202e676f6f676c" .
            "652e636c6f75642e696f742e76312e446576696365537461746532f8150a" .
            "0d4465766963654d616e6167657212b6010a144372656174654465766963" .
            "65526567697374727912302e676f6f676c652e636c6f75642e696f742e76" .
            "312e4372656174654465766963655265676973747279526571756573741a" .
            "232e676f6f676c652e636c6f75642e696f742e76312e4465766963655265" .
            "676973747279224782d3e4930241222e2f76312f7b706172656e743d7072" .
            "6f6a656374732f2a2f6c6f636174696f6e732f2a7d2f7265676973747269" .
            "65733a0f6465766963655f7265676973747279129f010a11476574446576" .
            "6963655265676973747279122d2e676f6f676c652e636c6f75642e696f74" .
            "2e76312e4765744465766963655265676973747279526571756573741a23" .
            "2e676f6f676c652e636c6f75642e696f742e76312e446576696365526567" .
            "6973747279223682d3e4930230122e2f76312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f726567697374726965732f2a" .
            "7d12c6010a14557064617465446576696365526567697374727912302e67" .
            "6f6f676c652e636c6f75642e696f742e76312e5570646174654465766963" .
            "655265676973747279526571756573741a232e676f6f676c652e636c6f75" .
            "642e696f742e76312e4465766963655265676973747279225782d3e49302" .
            "51323e2f76312f7b6465766963655f72656769737472792e6e616d653d70" .
            "726f6a656374732f2a2f6c6f636174696f6e732f2a2f7265676973747269" .
            "65732f2a7d3a0f6465766963655f72656769737472791298010a1444656c" .
            "657465446576696365526567697374727912302e676f6f676c652e636c6f" .
            "75642e696f742e76312e44656c6574654465766963655265676973747279" .
            "526571756573741a162e676f6f676c652e70726f746f6275662e456d7074" .
            "79223682d3e49302302a2e2f76312f7b6e616d653d70726f6a656374732f" .
            "2a2f6c6f636174696f6e732f2a2f726567697374726965732f2a7d12b301" .
            "0a144c6973744465766963655265676973747269657312302e676f6f676c" .
            "652e636c6f75642e696f742e76312e4c6973744465766963655265676973" .
            "7472696573526571756573741a312e676f6f676c652e636c6f75642e696f" .
            "742e76312e4c69737444657669636552656769737472696573526573706f" .
            "6e7365223682d3e4930230122e2f76312f7b706172656e743d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a7d2f7265676973747269657312" .
            "9f010a0c43726561746544657669636512282e676f6f676c652e636c6f75" .
            "642e696f742e76312e437265617465446576696365526571756573741a1b" .
            "2e676f6f676c652e636c6f75642e696f742e76312e446576696365224882" .
            "d3e493024222382f76312f7b706172656e743d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f726567697374726965732f2a7d2f64657669" .
            "6365733a066465766963651291010a0947657444657669636512252e676f" .
            "6f676c652e636c6f75642e696f742e76312e476574446576696365526571" .
            "756573741a1b2e676f6f676c652e636c6f75642e696f742e76312e446576" .
            "696365224082d3e493023a12382f76312f7b6e616d653d70726f6a656374" .
            "732f2a2f6c6f636174696f6e732f2a2f726567697374726965732f2a2f64" .
            "6576696365732f2a7d12a6010a0c55706461746544657669636512282e67" .
            "6f6f676c652e636c6f75642e696f742e76312e5570646174654465766963" .
            "65526571756573741a1b2e676f6f676c652e636c6f75642e696f742e7631" .
            "2e446576696365224f82d3e4930249323f2f76312f7b6465766963652e6e" .
            "616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f726567" .
            "697374726965732f2a2f646576696365732f2a7d3a066465766963651292" .
            "010a0c44656c65746544657669636512282e676f6f676c652e636c6f7564" .
            "2e696f742e76312e44656c657465446576696365526571756573741a162e" .
            "676f6f676c652e70726f746f6275662e456d707479224082d3e493023a2a" .
            "382f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e" .
            "732f2a2f726567697374726965732f2a2f646576696365732f2a7d12a201" .
            "0a0b4c6973744465766963657312272e676f6f676c652e636c6f75642e69" .
            "6f742e76312e4c69737444657669636573526571756573741a282e676f6f" .
            "676c652e636c6f75642e696f742e76312e4c697374446576696365735265" .
            "73706f6e7365224082d3e493023a12382f76312f7b706172656e743d7072" .
            "6f6a656374732f2a2f6c6f636174696f6e732f2a2f726567697374726965" .
            "732f2a7d2f6465766963657312d4010a194d6f64696679436c6f7564546f" .
            "446576696365436f6e66696712352e676f6f676c652e636c6f75642e696f" .
            "742e76312e4d6f64696679436c6f7564546f446576696365436f6e666967" .
            "526571756573741a212e676f6f676c652e636c6f75642e696f742e76312e" .
            "446576696365436f6e666967225d82d3e493025722522f76312f7b6e616d" .
            "653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7265676973" .
            "74726965732f2a2f646576696365732f2a7d3a6d6f64696679436c6f7564" .
            "546f446576696365436f6e6669673a012a12d8010a184c69737444657669" .
            "6365436f6e66696756657273696f6e7312342e676f6f676c652e636c6f75" .
            "642e696f742e76312e4c697374446576696365436f6e6669675665727369" .
            "6f6e73526571756573741a352e676f6f676c652e636c6f75642e696f742e" .
            "76312e4c697374446576696365436f6e66696756657273696f6e73526573" .
            "706f6e7365224f82d3e493024912472f76312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f726567697374726965732f2a" .
            "2f646576696365732f2a7d2f636f6e66696756657273696f6e7312b8010a" .
            "104c697374446576696365537461746573122c2e676f6f676c652e636c6f" .
            "75642e696f742e76312e4c69737444657669636553746174657352657175" .
            "6573741a2d2e676f6f676c652e636c6f75642e696f742e76312e4c697374" .
            "446576696365537461746573526573706f6e7365224782d3e4930241123f" .
            "2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e73" .
            "2f2a2f726567697374726965732f2a2f646576696365732f2a7d2f737461" .
            "7465731295010a0c53657449616d506f6c69637912222e676f6f676c652e" .
            "69616d2e76312e53657449616d506f6c696379526571756573741a152e67" .
            "6f6f676c652e69616d2e76312e506f6c696379224a82d3e4930244223f2f" .
            "76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f63617469" .
            "6f6e732f2a2f726567697374726965732f2a7d3a73657449616d506f6c69" .
            "63793a012a1295010a0c47657449616d506f6c69637912222e676f6f676c" .
            "652e69616d2e76312e47657449616d506f6c696379526571756573741a15" .
            "2e676f6f676c652e69616d2e76312e506f6c696379224a82d3e493024422" .
            "3f2f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f6361" .
            "74696f6e732f2a2f726567697374726965732f2a7d3a67657449616d506f" .
            "6c6963793a012a12bb010a125465737449616d5065726d697373696f6e73" .
            "12282e676f6f676c652e69616d2e76312e5465737449616d5065726d6973" .
            "73696f6e73526571756573741a292e676f6f676c652e69616d2e76312e54" .
            "65737449616d5065726d697373696f6e73526573706f6e7365225082d3e4" .
            "93024a22452f76312f7b7265736f757263653d70726f6a656374732f2a2f" .
            "6c6f636174696f6e732f2a2f726567697374726965732f2a7d3a74657374" .
            "49616d5065726d697373696f6e733a012a426a0a17636f6d2e676f6f676c" .
            "652e636c6f75642e696f742e763142124465766963654d616e6167657250" .
            "726f746f50015a36676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f636c6f75642f696f742f76313b69" .
            "6f74f80101620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

