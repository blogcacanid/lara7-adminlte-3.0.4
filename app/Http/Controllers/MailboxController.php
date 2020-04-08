<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    protected $data = array();    

    public function index()
    {
        return redirect('mailbox/inbox');
    }

    public function inbox()
    {
        $this->data = array(
            'title' => 'Mailbox',
            'sub_title' => 'Inbox'
        );
        return view('mailbox.inbox', $this->data);
    }
    
    public function compose()
    {
        $this->data = array(
            'title' => 'Mailbox',
            'sub_title' => 'Compose'
        );
        return view('mailbox.compose', $this->data);
    }
    
    public function read()
    {
        $this->data = array(
            'title' => 'Mailbox',
            'sub_title' => 'Read'
        );
        return view('mailbox.read', $this->data);
    }
    
}

