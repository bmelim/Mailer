<?php

/**
 * Configures the SMTP server used for testing
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    /** SMTP server to test against */
    const SERVER = 'mailtrap.io';
    /** plain text port */
    const PORT = 25;
    /** TLS port */
    const PORT_TLS = 465;
    /** SSL port (not supported by mailtrap currently */
    const PORT_SSL = 25;
    /** user for LOGIN auth */
    const USER = 'e3f534cfe656f4';
    /** password for LOGIN auth */
    const PASS = 'b6e38ddc0f1e9d';

    /** from */
    const FROM_NAME = 'mailer';
    const FROM_EMAIL = 'bot@mail.txthinking.com';
    /** to */
    const TO_NAME = 'Test To';
    const TO_EMAIL = 'cloud@txthinking.com';
    /** cc */
    const CC_NAME = 'Test Cc';
    const CC_EMAIL = 'cloud+cc@txthinking.com';
    /** bcc */
    const BCC_NAME = 'Test Bcc';
    /** email of receiver */
    const BCC_EMAIL = 'cloud+bcc@txthinking.com';

    /** delay in microsends between SMTP tests to avoid API limits (we're allowed two messages/second) */
    const DELAY = 500000; // half a second
}

