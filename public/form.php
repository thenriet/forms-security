<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="thanks.php" method="post">
        <div>
            <label  for="firstname">Prénom :</label>
            <input  
                type="text" 
                required 
                id="firstname"
                minlength="2"
                maxlength="30" 
                name="firstname">
        </div>
        <div>
            <label  for="lastname">Nom :</label>
            <input  
                type="text" 
                required  
                id="lastname"
                minlength="2"
                maxlength="30"  
                name="lastname">
        </div>
        <div>
            <label  for="email">Courriel :</label>
            <input  
                type="email" 
                required pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$" 
                id="email"  
                name="email">
        </div>
        <div>
            <label  for="phone">Téléphone :</label>
            <input  
                type="text" 
                required  
                id="phone"  
                name="phoneNumber">
        </div>
        <div>
            <label for="topic">Sujet :</label>
            <select 
                id="topic" 
                required name="topic" 
                size="1"
                minlength="1"
                maxlength="500"> 
                    <option value="Je ne suis pas content">Je ne suis pas content</option>
                    <option value="Je suis moyennement satisfait">Je suis moyennement satisfait</option>
                    <option value="Je suis très heureux">Je suis très heureux</option>
            </select>
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  
                id="message" 
                required  
                name="user_message">
            </textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>


