<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;

class BzTag extends Model
{
    protected $guarded = ['id'];

    const TYPE_EMOTION = 1;
    const TYPE_EVENT = 2;
    const TYPE_VULNERABILITY = 3;
    const TYPE_SELF_HARM = 4;
    const TYPE_SUICIDAL = 5;
    const TYPE_DRUG_ABUSE = 6;
    const TYPE_DESTRUCTIVE_BEHAVIOUR = 7;

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
        'boredom' => '#ffc09c',
        'disgust' => '#fbc083',
        'loathing' => '#ff8855',
        // red
        'annoyance' => '#ff7777',
        'anger' => '#ff4444',
        'rage' => '#ff0000',
        // light blue
        'distraction' => '#e0ffff',
        'surprise' => '#afeeee',
        'amazement' => '#87cefa',
    ];

    public static function createSystemDefaults()
    {
        $systemTags = [
            (object)[
                'name' => __('flags.problems.destructive_behaviour'),
                'type' => BzTag::TYPE_DESTRUCTIVE_BEHAVIOUR,
            ],
            (object)[
                'name' => __('flags.problems.drug_abuse'),
                'type' => BzTag::TYPE_DRUG_ABUSE,
            ],
            (object)[
                'name' => __('flags.problems.self_harm'),
                'type' => BzTag::TYPE_SELF_HARM,
            ],
            (object)[
                'name' => __('flags.problems.suicidal'),
                'type' => BzTag::TYPE_SUICIDAL,
            ],
        ];

        foreach($systemTags as $tag) {
            BzTag::create([
                'userid' => 0,
                'name' => $tag->name,
                'type' => $tag->type,
                'sign' => BzTag::SIGN_NEUTRAL,
                'color' => '',
            ]);
        }

        foreach(Lang::get('flags.vulnerabilities') as $key => $emotion) {
            BzTag::create([
                'userid' => 0,
                'name' => __('flags.vulnerabilities.'.$key),
                'type' => BzTag::TYPE_VULNERABILITY,
                'sign' => BzTag::SIGN_NEUTRAL,
                'color' => '',
            ]);
        }
    }

    public static function createUserDefaults(User $user)
    {
        foreach(Lang::get('emotions.positive') as $key => $emotion) {
            BzTag::create([
                'userid' => $user->id,
                'name' => __('emotions.positive.'.$key),
                'type' => BzTag::TYPE_EMOTION,
                'sign' => BzTag::SIGN_POSITIVE,
                'color' => self::EMOTION_COLORS[$key],
            ]);
        }
        foreach(Lang::get('emotions.negative') as $key => $emotion) {
            BzTag::create([
                'userid' => $user->id,
                'name' => __('emotions.negative.'.$key),
                'type' => BzTag::TYPE_EMOTION,
                'sign' => BzTag::SIGN_NEGATIVE,
                'color' => self::EMOTION_COLORS[$key],
            ]);
        }
        foreach(Lang::get('emotions.neutral') as $key => $emotion) {
            BzTag::create([
                'userid' => $user->id,
                'name' => __('emotions.neutral.'.$key),
                'type' => BzTag::TYPE_EMOTION,
                'sign' => BzTag::SIGN_NEUTRAL,
                'color' => self::EMOTION_COLORS[$key],
            ]);
        }
    }
}
