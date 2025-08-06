@extends('frontend.layout.app')

@section('page-title')
My Account
@endsection


@section('page-css')
<link href="{{ asset('frontend/style/accounts.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
@endsection

@section('body-content')

    <section class="after-header p-tb-10">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="material-icons" title="Home">home</i></a></li>
                <li><a href="">Account</a></li>
            </ul>
        </div>
    </section>

    <div class="container ac-layout">
        <div class="ac-header">
            <div class="left">
                <span class="avatar"><img
                        src="https://www.gravatar.com/avatar/88dd63c75fe13fe6ca6f68ad068eecf8?s=70&amp;d=mp&amp;r=g"
                        width="80" height="80" alt="Ra"></span>
                <div class="name">
                    <p>Hello,</p>
                    <p class="user">Rahin ahmed</p>
                </div>
            </div>
            <div class="right">
                <div class="balance">
                    <span class="blurb">Star Points</span>
                    <span class="amount">0</span>
                </div>
                <div class="balance">
                    <span class="blurb">Store Credit</span>
                    <span class="amount">0</span>
                </div>
            </div>
        </div>

        <div class="ac-menus">
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">chrome_reader_mode</span><span>Orders</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">assignment</span><span>Quote</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">person</span><span>Edit Profile</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">lock</span><span>Change Password</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">book</span><span>Addresses</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">favorite_border</span><span>Wish List</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">important_devices</span><span>Saved PC</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">stars</span><span>Star Points</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">account_balance_wallet</span><span>Your Transactions</span></a>
            </div>
            <div class="ac-menu-item hide">
                <a href="" class="ico-btn"><span
                        class="material-icons">delete</span><span>Delete Account</span></a>
            </div>
            <div class="ac-menu-item">
                <a href="" class="ico-btn"><span
                        class="material-icons">input</span><span>Logout</span></a>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
<script>
    document.addEventListener('livewire:load', function () {
            Livewire.on('success', () => {
            setTimeout(() => {
                const modalElement = document.getElementById('edit-box');
                const modalInstance = bootstrap.Modal.getInstance(modalElement); 
                modalInstance.hide();
            }, 1000);
            setTimeout(() => {
                const modalElement = document.getElementById('edit-password');
                const modalInstance = bootstrap.Modal.getInstance(modalElement); 
                modalInstance.hide();
            }, 1000);
            });
        });

        const modal = document.querySelector('#edit-box');
        modal.addEventListener('show.bs.modal', (e) => {
            Livewire.emit('open_add_modal');
        });

        const modalPass = document.querySelector('#edit-password');
        modalPass.addEventListener('show.bs.modal', (e) => {
            Livewire.emit('open_add_modal');
        });

        document.querySelector('.left-dashboard-show').addEventListener('click', function() {
            document.querySelector('.dashboard-left-sidebar').classList.add('open');
        });

        document.querySelector('.dashboard-left-sidebar-close').addEventListener('click', function() {
            document.querySelector('.dashboard-left-sidebar').classList.remove('open');
        });
        
</script>

@endsection