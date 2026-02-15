<html> 
<head>
     <style> 
     .loader { position: fixed; width: 100%; height: 100vh; background: #000000; display: block; left: 0; top: 0; z-index: 999999; text-align: center; } 
     .loader img { width: 120px; margin-top: 80px; } .loader p { font-size: 24px; color: #fff; font-weight: bold; margin-top: 30px; }
     button{ background-color:white; }
     
     </style> 
     </head> 
     <body>
          <button style="color:black;height:500px;width:500px; background-color:white;" onclick="payWithZWitch('shub','8273651565',1000011,99)">submit</button>
          <div >
               <img src="200w.gif" alt="loading"> <p>Wait, we are sending your message. Complete payment to continue...</p> </div>
               <script> 
               async function payWithZWitch(name, phone, orderId, amount) {
                   const res = await fetch("zwitch_collect.php",
                   { method: "POST", headers: { "Content-Type": "application/json" },
                   body: JSON.stringify({ upi: "user@upi", amount: amount, orderId: orderId }) });
                   const data = await res.json(); 
                   console.log(data); }</script></body>
                   </html>