<?php
namespace Chetan\RandomPhpQuote;

class RandomPhpQuote
{
    public function getQuote()
    {
        $quotes = [
            "The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela",
            "The way to get started is to quit talking and begin doing. -Walt Disney",
            "Your time is limited, don't waste it living someone else's life. -Steve Jobs",
            "If life were predictable it would cease to be life, and be without flavor. -Eleanor Roosevelt",
            "Life is what happens when you're busy making other plans. -John Lennon",
            "The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt",
            "It is during our darkest moments that we must focus to see the light. -Aristotle",
            "Whoever is happy will make others happy too. -Anne Frank",
            "Do not go where the path may lead, go instead where there is no path and leave a trail. -Ralph Waldo Emerson",
            "The only impossible journey is the one you never begin. -Tony Robbins"
        ];

        return $quotes[array_rand($quotes)];
    }
}


?>