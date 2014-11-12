<?php
namespace FireflyIII\Shared\Preferences;
/**
 * Class PreferencesHelper
 *
 * @package Firefly\Helper\Preferences
 */
class Preferences implements PreferencesInterface
{

    /**
     * @param      $name
     * @param null $default
     *
     * @return null|\Preference
     */
    public function get($name, $default = null)
    {
        $pref = \Preference::where('user_id', \Auth::user()->id)->where('name', $name)->first();
        if (is_null($default) && is_null($pref)) {
            // return NULL
            return null;
        }
        if (!is_null($pref)) {
            return $pref;
        }
        if (!is_null($default) && is_null($pref)) {
            // create preference, return that:
            return $this->set($name, $default);
        }

        return null;

    }

    /**
     * @param $name
     * @param $value
     *
     * @return \Preference
     */
    public function set($name, $value)
    {
        $pref = \Preference::where('user_id', \Auth::user()->id)->where('name', $name)->first();
        if (is_null($pref)) {
            $pref       = new \Preference;
            $pref->name = $name;
            $pref->user()->associate(\Auth::user());

        }
        $pref->data = $value;
        $pref->save();


        return $pref;

    }
}