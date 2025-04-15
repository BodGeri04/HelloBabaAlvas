<h2>Kapcsolatfelvételi űrlap</h2>
<p><strong>Név:</strong> {{ $data['username'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Termék:</strong> {{ $data['product'] }}</p>
<p><strong>Üzenet:</strong></p>
<p>{{!! $data['message'] !!}}</p>
