<?php
return [
    'alipay' => [
        'app_id'         => '2016101000655706',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsGbHtkqiDF2i9cOG27dbPaXSihlyR32g23dVzJJMNNPlMMEYk1QyvAaHBKQEpe71Ygx/1BFnJnZZCVmiUVfiCXerCFCTNkSjz+yueNQhpYFiPfHu0lc/WUzLhVY5TREV60eXm1BZs+UwQHjeHVoWgMX3sRcjqAN3wJ7XFn29N78wLd03XQQNOlKFf+9D/DD4uzlqKN8Ht/lX7t+xZI2QmmDocprkNsNxp8+57UKzORXLTAaddQEuZVXmeY0fdTeXs4MfZQqZfUznsObksEvgcb1fvcT6NFe49d4AOTUI+cS3h3QIxDXSypD+MN8x7CyF8iV2tlSmtAYo1h4pHit7AQIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEA8ExiwjqSVq2PzbqlGF5AB139+1E/ymK0OOukU16pNxIFgacYnYleXhNH2+go2kh4lgEEJb1ZBXSUNR5NGx9Ed5MBD0u4RVBuoHz19qcEBQ4WIxfAJEhUFCbLk9aEmxZ39wmbUqMtxF5AU3a5koh77nZbWlXTD7R5BKoqF2KJpETWeAgK86nybXSJGvRD2IU43bA4ZNHeM99AwDy/A9cYF84cZHlgY7PCE3poUSRDh3pvzzcRuONmxVVAeEFIRqYAzR553/d156gdlZSM2bT4xX8PIA3GWGwdEQ5He/Nfo5QgxFOu+b34qmnU8QmW+RtPJL+SPtz1jaNJipHodf1T0wIDAQABAoIBAQC/GZBEtL3iTt8ZFkDrczDqavZsIj5f3kVDKysg3hwmXp+gb1mlFzTEDgNMwIGUrqOvb5lzxfSA4ShoYfOiCSizC2aBWo9uGDwSR653/HS27G/wcpfsgtTSvdOSe7wzdhfrj2lFu93O18HCXp3QCdi9WMTnv289gyHm8sjMliGuT0HYfvddn5A9Dnbf963BqYQp5/EvztyTtjy/C4pHopUP2PQgLoy4ajKoC9t6+NOTi6GtYKbsiMwql/v+JqhlPMCxk45yjbPTBpX8wX+fwMQM+Gu53IgBq2xqZcXD2F0cdiZ3nMua8V9eh3kCtoeoZ8b05VTsFTddOzQK+KKQaCe5AoGBAPqOFh0sPViDdCrUrkC1O1a+J4MTxy47Z/1vBzCjCNHR6CVAnumyJYPPtJzftttiqJvH3tTjFeRbM6ph2BC02AsbUxv70PTfWfIevSrArHjQAqpp9xTc8+N9RdoxC2QBfbPxszpFMbp7xzC/NTJcxUeIYNCpdBxmpMOvJeEO75EdAoGBAPWFPRNgT3XBR2OK8/YdaadmbRBiHDI5iKxUtb5hcyvXIGHKQ1i4wv75eoSqEvZkyRREARXfofowEpKkyESrgKXU0ws5dp5/+Gx9h2Re6DXcOhhNJqICT+m9vSiLIzwRRoqynXQkRcayg5TJCbMIi+zvraptXNiwO6oAoXeRrNWvAoGAEjmJlD+miqytI3xq3FwSX+He/+LNZyh9DOspi7kgKBrrluIXbQo/PlI6YfrH0zde6k3kgHmwGvcjT+5kB/sPh+dJ6Uwsy9L/OORRgC2ZngQLXZftl//mYZK4JQHSQUj2esNG9SMZVeYw+/O8i9hBpU1fNW5N+s7ghzdTOwaaGGUCgYEAtOSsMUB+iwYSsRbJ1IWrOHlQ1gdTOvYE6uOm3FQ0ZRKleydpI09N7EqnqGMegYeUV2gbXKBeWVVd+cmK/H1X1dbOf7Cg4vrqcBS00pDSigxuiUUet7L4agEwA1UwaqtXzAz50X6AInuYUuEkUlJzteiJjc3x4H1IGGNKlCwyqWUCgYEA5jZXkEl36JYB1gn9q2Z+9szeI/6VVYDhlkxP2aQDM7Os2c25ZDyJ7IW4BOVhBdYJg3TYCwGQ69nRGZ2DcA2l21LHotBIes50WH1L8cn1/V7vOKaIzoiG58nrLsvcOHoOFJmRA2SYAJhRza1a/ehRVciuu93j+Zl85sLFTZ3jxcY=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];