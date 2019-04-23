<?php

namespace App\Http\ViewComponents;

use Spatie\SchemaOrg\Schema;
use Illuminate\Contracts\Support\Htmlable;

class SchemaWebsiteComponent implements Htmlable
{
    private $schema;

    public function __construct()
    {
        $this->schema = Schema::webSite()
            ->dateCreated('2009')
            ->creator('TJM Promos, Inc.')
            ->name(config('website.title'))
            ->email(config('website.email'))
            ->url(config('app.url'))
            ->logo(asset('logo.jpg'))
            ->contactPoint(Schema::contactPoint()
                ->postalAddress(Schema::postalAddress()
                    ->addressCountry('USA')
                    ->addressLocality('Ocala')
                    ->addressRegion('FL')
                    ->postalCode('34482')
                    ->streetAddress('511 NW 48th Terrace'))
                ->telephone(phone(config('website.phone'), 'US')->formatE164())
                ->email(config('website.email'))
                ->contactType('Customer Service')
                ->contactOption('TollFree')
                ->areaServed('US')
                ->hoursAvailable([
                    Schema::openingHoursSpecification()
                        ->dayOfWeek('https://schema.org/Monday')
                        ->opens('08:00:00')
                        ->closes('18:00:00'),
                    Schema::openingHoursSpecification()
                        ->dayOfWeek('https://schema.org/Tuesday')
                        ->opens('08:00:00')
                        ->closes('18:00:00'),
                    Schema::openingHoursSpecification()
                        ->dayOfWeek('https://schema.org/Wednesday')
                        ->opens('08:00:00')
                        ->closes('18:00:00'),
                    Schema::openingHoursSpecification()
                        ->dayOfWeek('https://schema.org/Thursday')
                        ->opens('08:00:00')
                        ->closes('18:00:00'),
                    Schema::openingHoursSpecification()
                        ->dayOfWeek('https://schema.org/Friday')
                        ->opens('08:00:00')
                        ->closes('18:00:00'),
                ]));
    }

    public function toHtml()
    {
        return $this->schema->toScript();
    }
}
