<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BzTag extends Model
{
    protected $guarded = ['id'];

    const TYPE_EMOTION = 1;
    const TYPE_EVENT = 2;

    const SIGN_NEUTRAL = 0;
    const SIGN_POSITIVE = 1;
    const SIGN_NEGATIVE = -1;

    const EMOTION_COLORS = [
        // yellow
        'serenity' => '#ffffe0',
        'joy' => '#f0e68c',
        'ecstasy' => '#ffff00',
        // light green
        'acceptance' => '#90ee90',
        'trust' => '#adff2f',
        'admiration' => '#32cd32',
        // orange
        'interest' => '#ffe4b5',
        'anticipation' => '#ffd700',
        'vigilance' => '#ffa500',
        // dark green
        'apprehension' => '#66cdaa',
        'fear' => '#3cb371',
        'terror' => '#2e8b57',
        // blue
        'pensiveness' => '#add8e6',
        'sadness' => '#87ceeb',
        'grief' => '#1e90ff',
        // light red
        'boredom' => '#ffa07a',
        'disgust' => '#fa8072',
        'loathing' => '#ff0000',
        // red
        'annoyance' => '#dc143c',
        'anger' => '#b22222',
        'rage' => '#8b0000',
        // light blue
        'distraction' => '#e0ffff',
        'surprise' => '#afeeee',
        'amazement' => '#87cefa',
    ];
}
