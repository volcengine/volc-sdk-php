<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\GPBMetadata;

class ResponseVod
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Volc\Service\Vod\Models\GPBMetadata\Base::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodPlay::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodSpace::initOnce();
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0afe380a1f766f642f726573706f6e73652f726573706f6e73655f766f642e70726f746f121e566f6c63656e67696e652e566f642e4d6f64656c732e526573706f6e73651a1b766f642f627573696e6573732f766f645f706c61792e70726f746f1a1c766f642f627573696e6573732f766f645f6d656469612e70726f746f1a1d766f642f627573696e6573732f766f645f75706c6f61642e70726f746f1a1f766f642f627573696e6573732f766f645f776f726b666c6f772e70726f746f1a1c766f642f627573696e6573732f766f645f73706163652e70726f746f1a1a766f642f627573696e6573732f766f645f63646e2e70726f746f22a2010a16566f64476574506c6179496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112400a06526573756c7418022001280b32302e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64506c6179496e666f4d6f64656c22b6010a1e566f644765744f726967696e616c506c6179496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124c0a06526573756c7418022001280b323c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744f726967696e616c506c6179496e666f526573756c7422ba010a20566f644765745072697661746544726d506c617941757468526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124e0a06526573756c7418022001280b323e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765745072697661746544726d506c617941757468526573756c7422b6010a1e566f64476574486c7344656372797074696f6e4b6579526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124c0a06526573756c7418022001280b323c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574486c7344656372797074696f6e4b6579526573756c7422d2010a2c566f64476574506c6179496e666f576974684c69766554696d6553686966745363656e65526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461125a0a06526573756c7418022001280b324a2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574506c6179496e666f576974684c69766554696d6553686966745363656e65526573756c74229f010a16566f6455706c6f61644d65646961526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123d0a06526573756c7418022001280b322d2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436f6d6d69744461746122a6010a1e566f64517565727955706c6f61645461736b496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123c0a06526573756c7418022001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6451756572794461746122a2010a14566f6455726c55706c6f6164526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112420a06526573756c7418022001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6455726c526573706f6e73654461746122ae010a1a566f644170706c7955706c6f6164496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112480a06526573756c7418022001280b32382e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644170706c7955706c6f6164496e666f526573756c7422b0010a1b566f64436f6d6d697455706c6f6164496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112490a06526573756c7418022001280b32392e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64436f6d6d697455706c6f6164496e666f526573756c7422a8010a18566f644765744d65646961496e666f73526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112440a06526573756c7418022001280b32342e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744d65646961496e666f734461746122640a1a566f645570646174654d65646961496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122ae010a1f566f644765745265636f6d6d656e646564506f73746572526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112430a06526573756c7418022001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574526563506f7374657244617461226d0a23566f645570646174654d656469615075626c697368537461747573526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122a4010a16566f6444656c6574654d65646961526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112420a06526573756c7418022001280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6444656c6574654d656469614461746122ae010a1b566f6444656c6574655472616e73636f646573526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112470a06526573756c7418022001280b32372e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6444656c6574655472616e73636f6465734461746122a6010a17566f644765744d656469614c697374526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112430a06526573756c7418022001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744d656469614c6973744461746122b4010a1e566f644765745375627469746c65496e666f4c697374526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124a0a06526573756c7418022001280b323a2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765745375627469746c65496e666f4c6973744461746122b6010a1f566f645570646174655375627469746c65537461747573526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124b0a06526573756c7418022001280b323b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645570646174655375627469746c655374617475734461746122670a1d566f645570646174655375627469746c65496e666f526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122c0010a24566f64437265617465566964656f436c617373696669636174696f6e526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112500a06526573756c7418022001280b32402e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64437265617465566964656f436c617373696669636174696f6e44617461226e0a24566f64557064617465566964656f436c617373696669636174696f6e526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461226e0a24566f6444656c657465566964656f436c617373696669636174696f6e526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122ba010a23566f644c697374566964656f436c617373696669636174696f6e73526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124b0a06526573756c7418022001280b323b2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64566964656f436c617373696669636174696f6e734461746122b7010a21566f6447657441756469744672616d6573466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124a0a06526573756c7418022001280b323a2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744672616d6573466f724175646974526573756c7422b4010a1e566f644765744d4c4672616d6573466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124a0a06526573756c7418022001280b323a2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744672616d6573466f724175646974526573756c7422be010a22566f644765744265747465724672616d6573466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112500a06526573756c7418022001280b32402e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744265747465724672616d6573466f724175646974526573756c7422b8010a1f566f64476574417564696f496e666f466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461124d0a06526573756c7418022001280b323d2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574417564696f496e666f466f724175646974526573756c7422da010a30566f644765744175746f6d617469635370656563685265636f676e6974696f6e466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461125e0a06526573756c7418022001280b324e2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f644765744175746f6d617469635370656563685265636f676e6974696f6e466f724175646974526573756c7422cc010a29566f64476574417564696f4576656e74446574656374696f6e466f724175646974526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112570a06526573756c7418022001280b32472e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64476574417564696f4576656e74446574656374696f6e466f724175646974526573756c7422aa010a18566f645374617274576f726b666c6f77526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112460a06526573756c7418022001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645374617274576f726b666c6f77526573756c7422600a16566f644372656174655370616365526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461229c010a14566f644c6973745370616365526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123c0a06526573756c7418022003280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645370616365496e666f22a1010a19566f64476574537061636544657461696c526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461123c0a06526573756c7418022001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645370616365496e666f22a7010a19566f644765745370616365436f6e666967526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112420a06526573756c7418022003280b32322e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f645370616365436f6e666967496e666f22600a16566f645570646174655370616365526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d65746164617461226c0a22566f64557064617465537061636555706c6f6164436f6e666967526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122a4010a15566f644c697374446f6d61696e526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112430a06526573756c7418022001280b32332e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f64446f6d61696e436f6e666967496e666f22b1010a1f566f6443726561746543646e526566726573685461736b526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112460a06526573756c7418022001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443726561746543646e5461736b526573756c7422b1010a1f566f6443726561746543646e5072656c6f61645461736b526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746112460a06526573756c7418022001280b32362e566f6c63656e67696e652e566f642e4d6f64656c732e427573696e6573732e566f6443726561746543646e5461736b526573756c74226c0a22566f6441646443616c6c6261636b537562736372697074696f6e526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746122650a1b566f6453657443616c6c6261636b4576656e74526573706f6e736512460a10526573706f6e73654d6574616461746118012001280b322c2e566f6c63656e67696e652e566f642e4d6f64656c732e426173652e526573706f6e73654d6574616461746142cc010a29636f6d2e766f6c63656e67696e652e736572766963652e766f642e6d6f64656c2e726573706f6e7365420b566f64526573706f6e736550015a416769746875622e636f6d2f766f6c63656e67696e652f766f6c632d73646b2d676f6c616e672f736572766963652f766f642f6d6f64656c732f726573706f6e7365a00101d80101ca0220566f6c635c536572766963655c566f645c4d6f64656c735c526573706f6e7365e20223566f6c635c536572766963655c566f645c4d6f64656c735c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

