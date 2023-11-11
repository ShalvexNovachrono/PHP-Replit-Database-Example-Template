
# PHP Replit Database Example Template 
This template demonstrates how to use the Replit database with PHP, as its name implies.

[![Video](https://img.youtube.com/vi/Xn2cADqyoM8/maxresdefault.jpg)](https://www.youtube.com/watch?v=Xn2cADqyoM8)

## ReplDB?
Replit db, also known as the Replit database, is a free database maintained by Replit. It is incredibly secure and can be used with Python and Node.js.

If you use replit db without hosting a website with flask or merging your database into another website, your database will become local (or only viewable to you). On the other hand, if you host a website, people will be able to browse the Replit database and add to it, etc.

Replit database functions as a dictionary. You can only add keys and assign values if the value is an integer, string, or boolean (not circular, such as raw functions). Here are a few instances.

# Usage
This may be used to preserve sensitive information such as passwords, locations, and so on.

### **PHP code used to interact with Replit DB**
> ***This can be used to insert data to a key***\
> ```exec('curl $REPLIT_DB_URL -d "<key>=<value>"')```

> ***This can be used to get data with the key name***\
> ```exec('curl $REPLIT_DB_URL/<key>')```

> ***This can be used to delete a key***\
> ```exec('curl -XDELETE $REPLIT_DB_URL/<key>')```

> ***This can be used to get lists of keys***\
> ```exec('curl "$REPLIT_DB_URL?prefix=<key>"')```


### Links that can be helpful
* https://www.php.net/manual/en/function.exec 
