<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;
use Rector\Set\ValueObject\LevelSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src/Entity/',
    ]);

    // register a single rule
    $rectorConfig->ruleWithConfiguration(AnnotationToAttributeRector::class, [
        new AnnotationToAttribute('Symfony\Component\Routing\Annotation\Route'),
    ]);

    $rectorConfig->sets([
        DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
    ]);

    /* $rectorConfig->phpstanConfig(__DIR__ . '/phpstan.neon'); */

    $rectorConfig->symfonyContainerXml(__DIR__ . '/var/cache/dev/App_KernelDevDebugContainer.xml');

    
    $rectorConfig->ruleWithConfiguration(
      AnnotationToAttributeRector::class,
      [new AnnotationToAttribute('Symfony\Routing\Annotation\Route')]
  );
    // define sets of rules
    //    $rectorConfig->sets([
    //        LevelSetList::UP_TO_PHP_72
    //    ]);
};
