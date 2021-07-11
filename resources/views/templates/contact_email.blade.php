<div style="background-color: lightgrey;font-family: 'Helvetica', 'Arial', sans-serif;">
    <div style="padding: 15px 30px;background: cadetblue;color: white;">
      <h2>Hello Admin,</h2>
      <p>You received an email from: <span style="background-color: slateblue;padding: 3px 6px;color: white;border-radius: 4px;">{{ $name }}</span></p>
    </div>
    <div style="padding: 15px 30px;">
      <h3>Here are the details:</h3>
      <p><b class="">Name:</b> {{ $name }}</p>
      <p><b>Email:</b> {{ $email }}</p>
      <p><b>Phone Number:</b> {{ $number }}</p>
      <p><b style="">Subject:</b> {{ $subject }}</p>
      <p><b>Message:</b> {{ $user_message }}</p>
    </div>
  </div>
  