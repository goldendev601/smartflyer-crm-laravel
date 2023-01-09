<?php

namespace App\Http\Controllers;

use App\ModelsExtended\UserNotification;
use Illuminate\Http\Request;


use App\ModelsExtended\User;
use App\Providers\RouteServiceProvider;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Redirect;
use App\Http\Requests\UserSettingRequest;
use App\Http\Requests\ChangePasswordRequest;

class UserSettingController extends Controller
{
    public function userSettings()
    {
        $user = User::find(auth()->id());
        return view('pages.settings', compact('user'));
    }

    function updateUserSetting(UserSettingRequest $request)
    {
        try {
            $user = User::find(auth()->id());
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->name = "{$request->input('first_name')} {$request->input('last_name')}";
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            if ($request->input('dobD') != '' && $request->input('dobM') != '' && $request->input('dobY')) {
                $user->date_of_birth = convertToStringDateCarbonDate($request->input('dobY'), $request->input('dobM'), $request->input('dobD'));
            }

            if ($request->input('remove-profile-photo') == 'yes') {
                $user->image_relative_url = null;
            }
            $user->address = $request->input('address');
            $user->save();

            // ************** client profile photp upload insert code ***************
            if ($request->hasfile('image_relative_url')) {
                $file = $request->file('image_relative_url');
                $user->storeProfilePicture($file);
            }


            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            // return $e;
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();;
        } catch (\Throwable $e) {
            // return $e;
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();;
        }
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $user = User::find(auth()->id());
            $user->password = Hash::make($request->input('new_password'));
            $user->save();

            toastr()->success('Password change successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            return $e;
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();;
        } catch (\Throwable $e) {
            return $e;
            // something went wrong
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back()->withInput();;
        }
    }

    public function userNotificationSetting(Request $request)
    {
        try {
            $permission = $request->permission;
            $notification_id = $request->notification_id;
            $permission = ($permission == 1) ? 0 : 1;
            $permission_message = ($permission == 1) ? 'on' : 'off';
            $user = User::find(auth()->id());

            UserNotification::where('user_id', $user->id)
                            ->where('id', $notification_id)->first()
                            ->update(['permission' => $permission]);

            return response()->json([
                'status' => 200,
                'permission' => $permission,
                'message' => 'Notification ' . $permission_message . ' successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 400,
                'permission' => $permission,
                'message' => 'An error has occurred please try again later.'
            ]);
        }

    }
}
