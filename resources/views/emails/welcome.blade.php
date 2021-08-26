@component('mail::message')
Dear, {{ $fullname }}

Congratulations, your SPE ITS SC membership account is active now. 

For further event info, you can kindly check our website at <a href="https://speitssc.org/" target="_blank">speitssc.org</a> or our instagram at <a href="https://www.instagram.com/speitssc/" target="_blank">@speitssc</a>.

We look forward to seeing you in our events and to contribute to lead the change. Buckle up, because we have a lot of new events and experiences that we can’t wait to share!  Thank you for your attention.

Contact Person :
<a href="http://line.me/ti/p/~george.nanlohy">George</a>
  

@component('mail::button', ['url' => 'https://speitssc.org', 'color' => 'primary'])
Login
@endcomponent

Best Regards,<br>
Membership Management<br>
Society of Petroleum Engineers<br>
Institut Teknologi Sepuluh Nopember Student Chapter

SPE ITS SC 2021/2022<br>
#SPEITSSC<br>
#LeadtheChange
@endcomponent
