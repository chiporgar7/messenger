@extends('layouts.app')

@section('content')

<b-container>
    <b-row align-h="center">
        <b-col cols="8">

            <b-card title="Registro" class="my-3">

                @if($errors->any())

                    <b-alert show variant="danger">
                        <ul class="mb-0">

                            @foreach($errors->all() as $error)

                                <li> {{ $error }}</li>

                            @endforeach 
                            
                        </ul>
                    </b-alert>
                @else

                    <b-alert show>
                         Por favor Ingresa tus datos
                    </b-alert>

                @endif


                <b-form  method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}


                    <b-form-group id="Nombre"
                        label="Nombre "
                        label-for="name" >

                        <b-form-input type="text"
                            id="name"
                            name="name" 
                            value="{{ old('name') }}" required autofocus
                            required/>
                        </b-form-input>

                    </b-form-group>

                    <b-form-group id="Email"
                        label="Correo Electrónico"
                        label-for="email"
                        description="Nunca compartiremos tu correo, está seguro con nosotros.">

                        <b-form-input type="email"
                            id="email"
                            name="email" 
                            value="{{ old('email') }}" 
                            required
                            placeholder="example@ejemplo.com" />
                        </b-form-input>

                    </b-form-group>


                    <b-form-group id="Password"
                        label="Contraseña"
                        label-for="password"
                        description="Asegurate de que no haya moros en la costa">

                        <b-form-input type="password"
                            id="password"
                            name="password" 
                            required/>
                        </b-form-input>

                     </b-form-group>


                    <b-form-group id="confirmar_contrasena"
                        label="Contraseña"
                        label-for="password_confirmation"
                        description="Asegurate de que no haya moros en la costa">

                        <b-form-input type="password"
                            id="password_confirmation"
                            name="password_confirmation" 
                            required/>
                        </b-form-input>
                     </b-form-group>


                    <b-button type="submit" variant="primary">
                        Confirmar registro
                    </b-button>

                    <b-button href="{{ route('login') }}" variant="link" >
                        ¿Ya te has registrado?
                    </b-button>

                
                </b-form>
              
            </b-card>

        </b-col>
    </b-row>
</b-container>



@endsection




