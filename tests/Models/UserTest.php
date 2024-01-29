<?php

namespace Tests\Models;

use Tests\TestCase;
use App\Models\User;
use App\Models\Region;
use Tests\ApiTestTrait;


final class UserTest extends TestCase
{

    // public function testUserCreate()
    // {
    //     $user = new User();
    //     $user->name = 'Ahmed';
    //     $user->phone = '09220000011';
    //     $user->email = 'email@mail.com';

    //     $this->assertSame('Mr.Ahmed', $user->name);
    //     $this->assertSame('09220000011', $user->phone);
    //     $this->assertSame('email@mail.com', $user->email);

    //     $this->assertEmpty($user->data);
    // }


    // public function testUserRetrieve()
    // {
    //     $user = User::where('id', '=', 1)->first();

    //     $this->assertSame('Mohamed', $user->name);
    //     $this->assertSame('1234567890', $user->phone);
    //     $this->assertSame('mohamed@gmail.com', $user->email);

    // }


    // public function testUserUpdate()
    // {
    //     $user = User::where('id', '=', 1)->first();

    //     $user->password = 'newpassword';

    //     $this->assertSame('newpassword', $user->password);
    // }


    // public function testUserDelete()
    // {
    //     $user = User::where('id', '=', 1)->first();

    //     $this->assertSame('Mohamed', $user->name);

    //     $user->delete();

    //     $user = User::where('id', '=', 1)->first();

    //     $this->assertSame(null, $user);
    // }


    // public function testUnDeleteUser()
    // {
    //     $user = User::withTrashed()->where('id', '=', 1)->first();

    //     $user->deleted_at = null;
    //     $user->save();


    //     $user = User::where('id', '=', 1)->first();

    //     $this->assertSame('Mohamed', $user->name);
    // }


    // public function testUserRegion()
    // {
    //     $user = User::where('id', '=', 6)->first();

    //     $this->assertInstanceOf(Region::class, $user->region);
    // }

}