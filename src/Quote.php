<?php
namespace Chetansingh\Quote;
use GuzzleHttp\Client;


class Quote
{

    public $quote;
    public $author;
    public $tags;

    public function __construct()
    {
        $this->getQuote();
    }

    public function getQuote()
    {
        $client = new Client();
        $response = $client->request('GET','https://api.quotable.io/random');
        $body = $response->getBody();
        $data = json_decode($body);
        $this->quote = $data->content;
        $this->author = $data->author;
        $this->tags = $data->tags;
        $this->tags = implode(", ", $this->tags);
        return $this->quote;
    }

    public function displayAsBootstrapCard()
    {
        return "<div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$this->quote}</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>{$this->author}</h6>
                        <p class='card-text'>{$this->tags}</p>
                    </div>
                 </div>";
    }

    public function displayAsText()
    {
        return "{$this->quote} - {$this->author}";
    }

    public function displayAsJson()
    {
        return json_encode([
            'quote' => $this->quote,
            'author' => $this->author,
            'tags' => $this->tags
        ]);
    }

    public function displayAsArray()
    {
        return [
            'quote' => $this->quote,
            'author' => $this->author,
            'tags' => $this->tags
        ];
    }

    public function displayAsHtml()
    {
        return "<p>{$this->quote} - {$this->author}</p>";
    }

    public function displayAsHtmlList()
    {
        return "<ul>
                    <li>{$this->quote}</li>
                    <li>{$this->author}</li>
                    <li>{$this->tags}</li>
                </ul>";
    }

    public function displayAsTextList()
    {
        return "{$this->quote}\n{$this->author}\n{$this->tags}";
    }

    public function displayAsJsonList()
    {
        return json_encode([
            'quote' => $this->quote,
            'author' => $this->author,
            'tags' => $this->tags
        ]);
    }

}
?>