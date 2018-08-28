<div>
	<table>
		<tbody>
			<tr>
				<td>
				Sender: {{ $data['name'] }}					
				</td>
			</tr>
			<tr>
				<td>
					Sender Email: {{ $data['email'] }}				
				</td>
			</tr>
			<tr>
				<td>
					Senders Phone: {{ $data['phone'] }}
				</td>
			</tr>

			@if(array_key_exists('movein', $data))
				<tr>
					<td>		
						    Move In Date: {{ $data['movein'] }}
			    	</td>
			    </tr>
			@endif

			@if(array_key_exists('bldg', $data))
				<tr>
					<td>		
						    Bldg: {{ $data['bldg'] }}
			    	</td>
			    </tr>
			@endif

			@if(array_key_exists('unit', $data))
				<tr>
					<td>		
						    Unit: {{ $data['unit'] }}
			    	</td>
			    </tr>
			@endif

			@if(array_key_exists('layout', $data))
				<tr>
					<td>					
						    Layout: {{ $data['layout'] }}
			    	</td>
			    </tr>
			@endif

			@if(array_key_exists('waitlist', $data))
				<tr>
					<td>		
						<strong>Add to Waitlist</strong>
			    	</td>
			    </tr>
		    @endif

		    @if(array_key_exists('note', $data))
			<tr>
				<td>		
					    Senders Note: {{ $data['note'] }}
				</td>
			</tr>
			@endif

		</tbody>
	</table>
</div>