<?php
/**
 * @brief	Protocolo HTTP
 * @details	Classes e interfaces relacionadas com o protocolo HTTP
 * @package Correios
 * @subpackage Correios_Http
 */

/**
 * @author	João Batista Neto <neto.joaobatista@imasters.com.br>
 * @brief	Constantes para identificar o método de requisição HTTP
 */
interface Correios_Http_HTTPRequestMethod {
	const DELETE = 'DELETE';
	const GET = 'GET';
	const HEAD = 'HEAD';
	const OPTIONS = 'OPTIONS';
	const POST = 'POST';
	const PUT = 'PUT';
	const TRACE = 'TRACE';
}