@extends('layouts.app')

@section('content')

<style>

    body {
        background: #0c1514;
        color: #fff;
    }
    h1 {
        color: #63c5bc;
    }
    .faded {
        color: #777;
    }
    #quiz-counter {
        color: #88449a;
    }
    .quiz-container {
        padding: 0.25em;
        max-width: 650px;
        margin: 1em auto;
    }

    .quiz-container a {
        text-decoration: none;
        color: #333;
    }

    #quiz-header,
    #quiz-start-screen,
    #quiz-results-screen,
    #quiz-counter {
        text-align: center;
    }

    .question {
        font-size: 1.25em;
    }

    .answers {
        list-style: none;
        padding: 0;
    }

    .answers a {
        display: block;
        padding: 0.5em 1em;
        margin-bottom: 0.5em;
        background: #fff;
    }

    .answers a.correct {
        background: #090;
    }
    .answers a.incorrect {
        background: #c00;
    }

    .answers a.correct,
    .answers a.incorrect {
        color: #fff;
    }

    #quiz-controls {
        background: #63c5bc;
        color: #111;
        padding: 0.25em 0.5em 0.5em;
        text-align: center;
    }

    #quiz-response {}
    #quiz-results {
        font-size: 1.25em;
    }

    #quiz-buttons a,
    .quiz-container .quiz-button {
        display: inline-block;
        padding: 0.5em 1em;
        background: #88449a;
        color: #fff;
    }
    #quiz-buttons a {
        background: #fff;
        color: #333;
    }

    /* Quiz State Overrides */

    .quiz-results-state #quiz-controls {
        background: none;
        padding: 0;
    }
    .quiz-results-state #quiz-buttons a {
        background: #88449a;
        color: #fff;
    }

</style>

<div id="quiz">
    <div id="quiz-header">
        <h1>jQuery Quiz Plugin</h1>
        <p class="faded">A quiz about the plugin built by the plugin.</p>
    </div>
    <div id="quiz-start-screen">
        <p><a href="#" id="quiz-start-btn" class="quiz-button">Start</a></p>
    </div>
</div>

<script>

    $('#quiz').quiz({
        //resultsScreen: '#results-screen',
        //counter: false,
        //homeButton: '#custom-home',
        counterFormat: 'Question %current of %total',
        questions: [
            {
                'q': 'Is jQuery required for this plugin?',
                'options': [
                    'Yes',
                    'No'
                ],
                'correctIndex': 0,
                'correctResponse': 'Good job, that was obvious.',
                'incorrectResponse': 'Well, if you don\'t include it, your quiz won\'t work'
            },
            {
                'q': 'How do you use it?',
                'options': [
                    'Include jQuery, that\'s it!',
                    'Include jQuery and the plugin javascript.',
                    'Include jQuery, the plugin javascript, the optional plugin css, required markup, and the javascript configuration.'
                ],
                'correctIndex': 2,
                'correctResponse': 'Correct! Sounds more complicated than it really is.',
                'incorrectResponse': 'Come on, it\'s not that easy!'
            },
            {
                'q': 'The plugin can be configured to require a perfect score.',
                'options': [
                    'True',
                    'False'
                ],
                'correctIndex': 0,
                'correctResponse': 'You\'re a genius! You just set allowIncorrect to true.',
                'incorrectResponse': 'Why you have no faith!? Just set allowIncorrect to true.'
            },
            {
                'q': 'How do you specify the questions and answers?',
                'options': [
                    'MySQL database',
                    'In the HTML',
                    'In the javascript configuration'
                ],
                'correctIndex': 2,
                'correctResponse': 'Correct! Refer to the documentation for the structure.',
                'incorrectResponse': 'Wrong! Do it in the javascript configuration. You might need to read the documentation.'
            }
        ]
    });

</script>


@endsection
