<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;

class EpisodeController extends Controller {
    public function getSeason($season) {
        $episodes = Episode::where('season', $season)->orderBy('episode')->get();
        return $episodes;
    }

    public function getEpisode($season, $episode) {
        $episode = Episode::where(['season' => $season, 'episode' => $episode])->get()[0];
        return $episode;
    }
}
