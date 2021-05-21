<?php

namespace App\Http\Helpers;

use App\Http\Helpers\ApiHelper;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class CacheSorter
{
    static public function worldometer($today,$yesterday,$yesterday2)
    {
        $sort = new CacheSorter;
        $sorted_all = array();

        for ($i=0; $i < max(count($today),count($yesterday),count($yesterday2)); $i++) {
            if($today[$i]['country'] != ''){
                $yesterday_key = $sort->search($yesterday,$today[$i]['country'],'country');
                $yesterday2_key = $sort->search($yesterday2,$today[$i]['country'],'country');

                $sorted_all[] = $sort->worldometer_sort($today[$i],$yesterday[$yesterday_key],$yesterday2[$yesterday2_key]);
            }
        }
        Cache::tags(['prod','prod.worldometers'])->put('worldometer', $sorted_all, now()->addMinutes(30));
        Cache::tags('temp.worldometers')->flush();

        return $sorted_all;
    }
    static public function worldometer_states($today,$yesterday)
    {
        $sort = new CacheSorter;
        $sorted_all = array();

        for ($i=0; $i < max(count($today),count($yesterday)); $i++) {
            if($today[$i]['state'] != ''){
                $yesterday_key = $sort->search($yesterday,$today[$i]['state'],'state');

                $sorted_all[] = $sort->worldometer_state_sort($today[$i],$yesterday[$yesterday_key]);
            }
        }

        Cache::tags(['prod','prod.worldometers'])->put('worldometer.states', $sorted_all, now()->addMinutes(30));
        Cache::tags('temp.worldometers.states')->flush();

        return $sorted_all;
    }

    static public function historical($array,$array1,$array2 ,$search_key)
    {
        $sort = new CacheSorter;
        $data = array();
        for ($i=0; $i < max(count($array),count($array1),count($array2)); $i++) {

            $app = $array[$i];
            $search_key_app1 = $sort->search($array1,$app['Country/Region'],'Country/Region');
            $search_key_app2 = $sort->search($array2,$app['Country/Region'],'Country/Region');

            $data[] = $sort->hostorical_sort($array[$i],$array1[$search_key_app1],$array2[$search_key_app2],$search_key);
        }
        Cache::tags('prod','prod.historical')->put('historical_all',$data);
        Cache::tags('temp.historical')->flush();
        return $data;
    }

    public function worldometer_sort($today,$yesterday,$yesterday2)
    {
        $sorted = array(
            'index'     => $today['index'] ? $today['index'] : null,
            'country'   => $today['country'],
            'continent' => $today['continent'] ? $today['continent'] : '',
            'timeline'  => array(
                'today' => array(
                    'cases'                 => $today['cases']              ? $today['cases'] : '',
                    'todayCases'            => $today['todayCases']         ? $today['todayCases'] : '',
                    'deaths'                => $today['deaths']             ? $today['deaths'] : '',
                    'todayDeaths'           => $today['todayDeaths']        ? $today['todayDeaths'] : '',
                    'recovered'             => $today['recovered']          ? $today['recovered'] : '',
                    'todayRecovered'        => $today['todayRecovered']     ? $today['todayRecovered'] : '',
                    'active'                => $today['active']             ? $today['active'] : '',
                    'critical'              => $today['critical']           ? $today['critical'] : '',
                    'casesPerOneMillion'    => $today['casesPerOneMillion'] ? $today['casesPerOneMillion'] : '',
                    'deathsPerOneMillion'   => $today['deathsPerOneMillion']? $today['deathsPerOneMillion'] : '',
                    'tests'                 => $today['tests']              ? $today['tests'] : '',
                    'testsPerOneMillion'    => $today['testsPerOneMillion'] ? $today['testsPerOneMillion'] : '',
                    'population'            => $today['population']         ? $today['population'] : '',
                    'oneCasePerPeople'      => $today['oneCasePerPeople']   ? $today['oneCasePerPeople'] : '',
                    'oneDeathPerPeople'     => $today['oneDeathPerPeople']  ? $today['oneDeathPerPeople'] : '',
                    'oneTestPerPeople'      => $today['oneTestPerPeople']   ? $today['oneTestPerPeople'] : '',

                ),
                'yesterday' => array(
                    'cases'                 => $yesterday['cases']              ? $yesterday['cases'] : '',
                    'todayCases'            => $yesterday['todayCases']         ? $yesterday['todayCases'] : '',
                    'deaths'                => $yesterday['deaths']             ? $yesterday['deaths'] : '',
                    'todayDeaths'           => $yesterday['todayDeaths']        ? $yesterday['todayDeaths'] : '',
                    'recovered'             => $yesterday['recovered']          ? $yesterday['recovered'] : '',
                    'todayRecovered'        => $yesterday['todayRecovered']     ? $yesterday['todayRecovered'] : '',
                    'active'                => $yesterday['active']             ? $yesterday['active'] : '',
                    'critical'              => $yesterday['critical']           ? $yesterday['critical'] : '',
                    'casesPerOneMillion'    => $yesterday['casesPerOneMillion'] ? $yesterday['casesPerOneMillion'] : '',
                    'deathsPerOneMillion'   => $yesterday['deathsPerOneMillion']? $yesterday['deathsPerOneMillion'] : '',
                    'tests'                 => $yesterday['tests']              ? $yesterday['tests'] : '',
                    'testsPerOneMillion'    => $yesterday['testsPerOneMillion'] ? $yesterday['testsPerOneMillion'] : '',
                    'population'            => $yesterday['population']         ? $yesterday['population'] : '',
                    'oneCasePerPeople'      => $yesterday['oneCasePerPeople']   ? $yesterday['oneCasePerPeople'] : '',
                    'oneDeathPerPeople'     => $yesterday['oneDeathPerPeople']  ? $yesterday['oneDeathPerPeople'] : '',
                    'oneTestPerPeople'      => $yesterday['oneTestPerPeople']   ? $yesterday['oneTestPerPeople'] : '',

                ),
                'yesterday2' => array(
                    'cases'                 => $yesterday2['cases']              ? $yesterday2['cases'] : '',
                    'todayCases'            => $yesterday2['todayCases']         ? $yesterday2['todayCases'] : '',
                    'deaths'                => $yesterday2['deaths']             ? $yesterday2['deaths'] : '',
                    'todayDeaths'           => $yesterday2['todayDeaths']        ? $yesterday2['todayDeaths'] : '',
                    'recovered'             => $yesterday2['recovered']          ? $yesterday2['recovered'] : '',
                    'todayRecovered'        => $yesterday2['todayRecovered']     ? $yesterday2['todayRecovered'] : '',
                    'active'                => $yesterday2['active']             ? $yesterday2['active'] : '',
                    'critical'              => $yesterday2['critical']           ? $yesterday2['critical'] : '',
                    'casesPerOneMillion'    => $yesterday2['casesPerOneMillion'] ? $yesterday2['casesPerOneMillion'] : '',
                    'deathsPerOneMillion'   => $yesterday2['deathsPerOneMillion']? $yesterday2['deathsPerOneMillion'] : '',
                    'tests'                 => $yesterday2['tests']              ? $yesterday2['tests'] : '',
                    'testsPerOneMillion'    => $yesterday2['testsPerOneMillion'] ? $yesterday2['testsPerOneMillion'] : '',
                    'population'            => $yesterday2['population']         ? $yesterday2['population'] : '',
                    'oneCasePerPeople'      => $yesterday2['oneCasePerPeople']   ? $yesterday2['oneCasePerPeople'] : '',
                    'oneDeathPerPeople'     => $yesterday2['oneDeathPerPeople']  ? $yesterday2['oneDeathPerPeople'] : '',
                    'oneTestPerPeople'      => $yesterday2['oneTestPerPeople']   ? $yesterday2['oneTestPerPeople'] : '',

                ),
            ),
        );
        return $sorted;

    }
    public function worldometer_state_sort($today,$yesterday)
    {
        $sorted = array(
            'index'     => $today['index'] ? $today['index'] : null,
            'state'   => $today['state'],
            'timeline'  => array(
                'today' => array(
                    'cases'                 => $today['cases']              ? $today['cases'] : '',
                    'todayCases'            => $today['todayCases']         ? $today['todayCases'] : '',
                    'deaths'                => $today['deaths']             ? $today['deaths'] : '',
                    'todayDeaths'           => $today['todayDeaths']        ? $today['todayDeaths'] : '',
                    'recovered'             => $today['recovered']          ? $today['recovered'] : '',
                    'active'                => $today['active']             ? $today['active'] : '',
                    'casesPerOneMillion'    => $today['casesPerOneMillion'] ? $today['casesPerOneMillion'] : '',
                    'deathsPerOneMillion'   => $today['deathsPerOneMillion']? $today['deathsPerOneMillion'] : '',
                    'tests'                 => $today['tests']              ? $today['tests'] : '',
                    'testsPerOneMillion'    => $today['testsPerOneMillion'] ? $today['testsPerOneMillion'] : '',
                    'population'            => $today['population']         ? $today['population'] : '',
                ),
                'yesterday' => array(
                    'cases'                 => $yesterday['cases']              ? $yesterday['cases'] : '',
                    'todayCases'            => $yesterday['todayCases']         ? $yesterday['todayCases'] : '',
                    'deaths'                => $yesterday['deaths']             ? $yesterday['deaths'] : '',
                    'todayDeaths'           => $yesterday['todayDeaths']        ? $yesterday['todayDeaths'] : '',
                    'recovered'             => $yesterday['recovered']          ? $yesterday['recovered'] : '',
                    'active'                => $yesterday['active']             ? $yesterday['active'] : '',
                    'casesPerOneMillion'    => $yesterday['casesPerOneMillion'] ? $yesterday['casesPerOneMillion'] : '',
                    'deathsPerOneMillion'   => $yesterday['deathsPerOneMillion']? $yesterday['deathsPerOneMillion'] : '',
                    'tests'                 => $yesterday['tests']              ? $yesterday['tests'] : '',
                    'testsPerOneMillion'    => $yesterday['testsPerOneMillion'] ? $yesterday['testsPerOneMillion'] : '',
                    'population'            => $yesterday['population']         ? $yesterday['population'] : '',
                ),
            ),
        );
        return $sorted;

    }

    public function hostorical_sort($array,$array1,$array2)
    {
        $remove = ['Province/State','Country/Region','Lat','Long'];
        $cases = array_diff_key($array,array_flip($remove));
        $deaths = array_diff_key($array1,array_flip($remove));
        $recovered = array_diff_key($array2,array_flip($remove));

        $data = array(
            'country'   => $array['Country/Region'] ? $array['Country/Region'] : '',
            'province'  => $array['Province/State'] ? $array['Province/State'] : '',
            'location'  =>  array(
                'latitude'  => $array['Lat'] ? $array['Lat']    : '',
                'longitude' => $array['Long']? $array['Long']   : '',
            ),

            'timeline'  => array(
                'cases'     => $cases       ? $cases      : null,
                'deaths'    => $deaths      ? $deaths     : null,
                'recovered' => $recovered   ? $recovered  : null
            ),
        );
        return $data;

    }

    public function search($array,$find,$search_key)
    {
        if(isset($find)){
            foreach ($array as $key => $val) {
                if ($val[$search_key] === $find) {
                    return $key;
                }
            }
        }
        return null;
    }
}
