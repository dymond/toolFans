<?php

namespace App\Http\ViewComponents;

use Spatie\SchemaOrg\Schema;
use DonatelloZa\RakePlus\RakePlus;
use Illuminate\Contracts\Support\Htmlable;

class SchemaBlogComponent implements Htmlable
{
    private $schema;

    public function __construct($post)
    {
        $this->schema = Schema::BlogPosting()
            ->headline($post->title)
            ->genre('')
            ->image(url($post->getFirstMedia('image')->getUrl()) ?? '')
            ->wordCount($post->wordCount())
            ->keywords(array_slice(RakePlus::create(get_blog_excerpt($post->body, null))->sortByScore('desc')->get(), 0,
                10))
            ->datePublished($post->publish_at->toDateString())
            ->dateCreated($post->publish_at->toDateString())
            ->dateModified($post->updated_at->toDateString())
            ->description($post->meta_description ?? '')
            ->articleBody(get_blog_excerpt($post->body, null));
    }

    public function toHtml()
    {
        return $this->schema->toScript();
    }
}
