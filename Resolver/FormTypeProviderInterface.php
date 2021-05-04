<?php

namespace oliverde8\ComfyBundle\Resolver;


use oliverde8\ComfyBundle\Model\ConfigInterface;
use Symfony\Component\Form\FormInterface;

interface FormTypeProviderInterface
{
    /**
     * Add the config to the form.
     *
     * @param string $name
     * @param ConfigInterface $config
     * @param FormInterface $formBuilder
     * @param string $scope
     * @return mixed
     */
    public function addTypeToForm(string $name, ConfigInterface $config, FormInterface $formBuilder, string $scope);

    /**
     * Check if the provider is compatible with this config.
     *
     * @param ConfigInterface $config
     * @return bool
     */
    public function supports(ConfigInterface $config): bool;

}