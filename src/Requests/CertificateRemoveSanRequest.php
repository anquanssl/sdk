<?php

namespace QuantumCA\Sdk\Requests;

/**
 * 退款请求
 *
 * @property string $quantum_id 必传,下单时返回的id
 * @property string $domain 必传,域名
 *
 * @link https://docs.pki.plus/docs/certificate/remove-san
 */
class CertificateRemoveSanRequest extends AbstractRequest
{
}
