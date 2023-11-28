<x-layout>

    <x-slot:title>
        Users
    </x-slot>

    <div class="uk-card uk-card-default uk-card-small uk-card-body">

        @if(request()->routeIs(['users.create']))
            <h3 class="uk-card-title">CREATE NEW USER</h3>
        @endif
        @if(request()->routeIs(['users.edit']))
            <h3 class="uk-card-title">EDIT USER</h3>
        @endif

        <form class="uk-form-stacked" method="POST"
              action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}">
            @csrf
            @isset($user)
                @method('PUT')
            @endisset

            <div class="uk-grid-margin uk-grid-small" data-uk-grid>

                @if(request()->routeIs(['users.edit']))
                    <div>
                        <label class="uk-form-label" for="id">Id</label>
                        <div class="uk-form-controls">
                            <input id="id" name="id"
                                   type="text" placeholder="" readonly
                                   class="uk-input uk-form-width-xsmall"
                                   value="{{ isset($user) ? $user->id : old('id') }}" >
                        </div>
                    </div>

                    <div>
                        <label class="uk-form-label" for="created">Created</label>
                        <div class="uk-form-controls">
                            <input id="created"
                                   type="text" placeholder="" readonly
                                   class="uk-input uk-form-width-small"
                                   value="{{ isset($user) ? $user->created_at->format('d-m-Y') : old('created_at') }}" >
                        </div>
                    </div>

                    <div>
                        <label class="uk-form-label" for="updated">Updated</label>
                        <div class="uk-form-controls">
                            <input id="updated"
                                   type="text" placeholder="" readonly
                                   class="uk-input uk-form-width-small"
                                   value="{{ isset($user) ? $user->updated_at->format('d-m-Y') : old('updated_at') }}" >
                        </div>
                    </div>
                @endif

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input id="name" name="name"
                               type="text" placeholder="user name"
                               class="uk-input uk-form-width-large @error('name') uk-form-danger @enderror"
                               value="{{ isset($user) ? $user->name : old('name') }}" >
                    </div>
                    @error('name') <small><b style="color:red">{{ $message }}</b></small> @enderror
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="email">Email</label>
                    <div class="uk-form-controls">
                        <input id="email" name="email"
                               type="text" placeholder="user email"
                               class="uk-input uk-form-width-large @error('email') uk-form-danger @enderror"
                               value="{{ isset($user) ? $user->email : old('email') }}" >
                    </div>
                    @error('email') <small><b style="color:red">{{ $message }}</b></small> @enderror
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="password">Password</label>
                    <div class="uk-form-controls">
                        <input id="password" name="password"
                               type="password" placeholder="password"
                               class="uk-input uk-form-width-large @error('password') uk-form-danger @enderror"
                               value="{{-- $user->email ?? '' --}}" >
                    </div>
                    @error('password') <small><b style="color:red">{{ $message }}</b></small> @enderror
                </div>

                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="password_confirmation">Password confirmation</label>
                    <div class="uk-form-controls">
                        <input id="password_confirmation" name="password_confirmation"
                               type="password" placeholder="password confirmation"
                               class="uk-input uk-form-width-large @error('password_confirmation') uk-form-danger @enderror"
                               value="{{-- $user->email ?? '' --}}" >
                    </div>
                    @error('password_confirmation') <small><b style="color:red">{{ $message }}</b></small> @enderror
                </div>

                <div>
                    <button name="action" type="submit" value="save"
                            class="uk-button uk-button-secondary">
                        Save
                    </button>

                    <button name="action" type="submit" value="save&exit"
                            class="uk-button uk-button-secondary">
                        Save & Exit
                    </button>
                </div>

            </div>
        </form>

    </div>

</x-layout>
