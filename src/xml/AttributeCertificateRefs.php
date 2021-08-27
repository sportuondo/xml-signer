<?php

/**
 * This class is part of the support for XAdES properties generation.
 * 
 * Copyright © 2021 Lyquidity Solutions Limited
 * License GPL 3.0.0
 * Bill Seddon 2021-07-19
 */

namespace lyquidity\xmldsig\xml;

/**
 *
 *	<!-- targetNamespace="http://uri.etsi.org/01903/v1.3.2#" -->
 *
 *	<xsd:element name="AttributeCertificateRefs" type="CompleteCertificateRefsType"/>
 */

/**
 * Creates a node for &lt;CompleteCertificateRefs>
 */
class AttributeCertificateRefs extends CompleteCertificateRefs implements UnsignedSignatureProperty
{
	/**
	 * Returns the instance local name
	 * @return string
	 */
	public function getLocalName()
	{
		return ElementNames::AttributeCertificateRefs;
	}

}
