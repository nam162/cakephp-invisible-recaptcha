<?php
namespace InvisibleReCaptcha\View\Helper;

use Cake\View\Helper;

/**
 * InvisibleReCaptcha helper
 */
class InvisibleReCaptchaHelper extends Helper
{
    protected $_defaultConfig = [
        'lang' => null,
        'data' => [
            'sitekey' => '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI',
            'badge' => 'bottomright',
            'type' => 'image',
        ],
    ];

    /**
     * {@inheritdoc}
     */
    public function initialize(array $config)
    {
    }

    /**
     * render method.
     *
     * @return string
     */
    public function render()
    {
        return $this->_View->element('InvisibleReCaptcha.recaptcha', $this->getConfig());
    }
}
