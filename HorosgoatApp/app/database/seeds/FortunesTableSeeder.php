<?php


class FortunesTableSeeder extends Seeder {

	public function run()
	{
        Eloquent::unguard();

        DB::table('fortunes')->truncate();

        $fortunes = [
            ['fortune' => "You'll recieve a fortune cookie!"],
            ['fortune' => "Help! I'm stuck in a fortune teller! Fry."],
            ['fortune' => "Eat your vegetables and you'll be strong like Popye"],
            ['fortune' => "Meh."],
            ['fortune' => "The fortune you seek is in another cookie"],
            ['fortune' => "Never give up, unless defeat"],
            ['fortune' => "Ignore all previous fortunes"],
            ['fortune' => "The end is near"],
            ['fortune' => "When in anger, sing the alphabet"],
            ['fortune' => "Winter is coming"],
            ['fortune' => "Don't fry beacon in the nude"],
            ['fortune' => "Confucius say you have a heart as big as Russia"],
            ['fortune' => 'Someone googles you everyday'],
            ['fortune' => 'You should totally be on YouTube'],
            ['fortune' => 'Never tease an armed midget'],
            ['fortune' => "Don't forget you are always on our minds"],
            ['fortune' => 'A man with brown eyes has surprise for you'],
            ['fortune' => 'An alien wants to meet you!'],
            ['fortune' => 'Even a bear can be taught to dance'],
            ['fortune' => "You'll live a long time, long enough to open many, many fortune cookies"],
            ['fortune' => 'If you can read this, you are literate. Congratulations!'],
            ['fortune' => 'Too much agreement kills a chat'],
            ['fortune' => 'Never put a sock in a toaster'],
            ['fortune' => "Age is something that doesn't matter, unless you are a cheese"],
            ['fortune' => 'Remember: food is an important part of a balanced diet'],
            ['fortune' => 'Only the mediocre are always at their best']
        ];
        DB::table('fortunes')->insert($fortunes);
    }

}