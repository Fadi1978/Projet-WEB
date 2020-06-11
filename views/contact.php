<div class="container">
  <form action="redirect.php">

    <label for="fname">Nom</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Prenom</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Email</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>