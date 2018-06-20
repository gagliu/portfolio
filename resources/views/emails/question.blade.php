  <h4>Remitente:</h4>
  <p>Nombre: {{ $request->name }}</p>
  <p>Correo: {{ $request->email }}</p>
  <h4>Asunto:</h4>
  <p>{{ $request->subject }}</p>
  <h4>Contenido:</h4>
  <p>{{ $request->message }}</p>
</div>
