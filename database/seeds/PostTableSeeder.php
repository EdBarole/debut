<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $posts = collect([]);

        $posts->push(['title' => 'Investment Risk Explained', 'summary' => 'An introduction to investment risk and how risk management can factor into your investing future.', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);
        $posts->push(['title' => 'What&apos;s thE dEaL with diVERsifIcAtioN', 'summary' => 'What do egg baskets, merchant ships, and chocolate chip cookies have to do with...', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);
        $posts->push(['title' => 'InVEstment PROFile: Public Works', 'summary' => 'Find out how municipal bonds (aka munis) can help diversify your stash.', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);
        $posts->push(['title' => 'Nuggets for passionate traders', 'summary' => 'Lorem ipsum dolor sit amet. This is some paragraph text.', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);
        $posts->push(['title' => 'Tip and tricks for startups', 'summary' => 'Lorem ipsum dolor sit amet. This is some paragraph text.', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);
        $posts->push(['title' => 'Denver treats stock rise as suspicious', 'summary' => 'Lorem ipsum dolor sit amet. This is some paragraph text.', 'contents' => '<p>We take risks every day of our lives. Whether it&apos;s crossing the street, asking out that cute barista, or negotiating a salary increase; risk plays a key role in our daily decisions. If you&apos;re willing to take the risk of asking for higher salary, you&apos;re probably weighing the risk of your request with potential reward. [That&apos;s called <strong>risk management</strong>!] You might be pretty darn familiar with risk in your personal or professional life - but what does risk mean for your investments.</p><h1>What is Investment Risk?</h1><p>Investment risk is the uncertainity of your investment&apos;s future returns. This includes the possibility that your future may not match the expected return. And this mis-matching of expectation and reality could negatively affect your financial welfare.</p><p>In other words, the performance of your investment may not be as successful as you hope. If you invest $100 every month, with the goal of a $7 [7%] return, you run the risk that the return on investment may be lower (or even a negative). But remember! A low expected return in the short term shouldn&apos;t stop you from thinking long term.</p>']);

        foreach ($posts as $post)
        {
            Post::create([
                'title' => $post['title'],
                'summary' => $post['summary'],
                'contents' => $post['contents'],
                'published' => true
            ]);
        }
    }
}
