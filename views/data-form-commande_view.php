<form name='form-shipping-data' action=# method='POST'>

    <input type='hidden' name='action' value='send-shipping-data'>
    <label for'first-name'>First Name:</label><br>
    <input type='text'name='first-name' class='form-input' required><br>
    <label for'last-name'>Last name:</label><br>
    <input type='text'name='last-name' class='form-input' required><br>
    <label for='number'>Your Number: </label><br>
    <input type='int' name='number' class='form-input' placeholder='Enter your number' required><br>
    <label for="city">Select your city:</label><br>
    <select id="city" name="city" required>
        <option value="">-- Please select --</option>
        <option value="abidjan">Abidjan</option>
        <option value="bouaké">Bouaké</option>
        <option value="yamoussokro">yamoussoukro</option>
    </select><br>
    <button type='submit' name='shipping-submit'>Commender</button>



</form>