## Anonymity and

## DOS

```
S2Day7Anon.md
```

# TOPICS


#### Topics

##### ● Anonymity

##### ● Methods of Anonymity

##### ● IP and MAC

##### ● DarkWeb

##### ● DOS and DDOS

##### ● How to do


#### Anonymity

###### ● Anony/unknown in amharic is የማይታወቅ

###### ● When Black Hat Hackers do Security tests on some target, They will

###### be unknown

###### ● This is because they are doing illegal things so they try to be

###### anonymous/የማይታወቅ ሰው

###### ● Keeping your identity private, but not your actions.

```
○ For example, using a fake name to post messages to a social media
platform.
● Anonymity is Simply using a fake Profile/Location/Identity/personality
```

#### Online Privacy

● What do you think about
incognito/privacy tabs?
● Do they give as privacy?
● These Programs are simply not
logging what we are doing(aka
history) but still the site we visit
with this program will have our ip
and other informations also our
ISP/internet service provider/ will
know.
● Therefore, they dont give as real
privacy. So how can we get that?


#### Methods of Anonymity

```
● There are several ways to be protected or to be Anonymous on the internet.
● These methods can change our identity,location or personality.
```
1. Proxychains
2. Tor Network
3. VPN
4. Mac change
5. Incognito
6. Secured OS
7. Temp mail
8. Temp number


#### What is Proxy Server?

● A **proxy server** is a system or router that provides a gateway between users and the internet.
Therefore, it helps prevent cyber attackers from entering a private network.
● Proxy means intermediary/መካከለኛ


#### ...means


#### ProxyChains

```
● We have seen what proxy is so lets see what Proxy chains are.
● Proxy chain is simply a chain of proxys.
● We have a lot of proxy lists so our request will pass through lot of proxys.
● This will hide our IP.
```
```
● Here our 1st IP was 70.248.28.23 but the Internet(webserver,...) know as 154.16.127.
```

#### Types of ProxyChains

Based on the path we follow There are 4 Types of proxychains.

1. Dynamic chain
2. Strict Chain
3. Round Robin Chain
4. Random Chain


#### Dynamic Chain

```
● Dynamic Chaining is That way the proxy Servers are chained is as the proxy
list given.
● If there is any server that is not working it will be skipped.
● If any of them doesnt work it will be broken and display errors.
```

#### Strict Chain

###### ● All Proxies chained in the order as the are listed.

###### ● All proxies Have to be up and working, if 1 is not working it will

###### display error


#### Round Robin chain

```
● It follows the order of the proxy list
● It will skip if 1 proxy is not working
● If all the proxies not working it will start again and check them. This
makes it different from Dynamic chain
```

#### Random Chain

###### ● It will choose some Proxy

###### server Randomly and creates

###### chain in random order.

###### ● Not working will be Skipped!

###### ● Each Request will be in

###### random sequence of servers.


#### demo

1. Find some Proxy servers to use.
    a. google.com
    b. https://geonode.com/


#### ...

2. Open /etc/proxychains4.conf

```
A. Turn on any kind proxychain you need
B. Put your proxy servers
```

#### ...

3. Accessing with proxychains
    1. Add “proxychains4” infront of
       any command.
● Find a working proxy server and you
are good to go!


#### T.O.R/ T he O nion R outing/ Network

● Tor is an open-source privacy network that enables anonymous web
browsing.
● The worldwide Tor computer network uses secure, encrypted
protocols to ensure that users' online privacy is protected.
● Tor users' digital data and communications are shielded using a
layered approach that resembles the nested layers of an onion.
● Tor uses an onion-style routing technique for transmitting data.
● When you use the Tor browser to digitally communicate or access a
website, the Tor network does not directly connect your computer to
that website.
● Instead, the traffic from your browser is intercepted by Tor and
bounced to a random number of other Tor users’ computers before
passing the request to its final website destination.


#### torghost

● Clone it from github
○ https://github.com/SusmithKrish
nan/torghost
● Install tor
● Open it!


#### ...

● Your last Proxy IP will be shown(Public IP)


#### VPNs

● VPN means Virtual Private Network.
● a service that helps you stay private online.
● A VPN establishes a secure, encrypted
connection between your computer and the
internet, providing a private tunnel for your
data and communications while you use public
networks


#### VPN...

```
● There are a lot of VPNS, those are paid and free
● The paid are more secured and private, still the free are Good
● Example: Nord VPN, Proton VPN, windscribe VPN,...
```

#### ...

Buying premium VPNS are good.


#### Mac Changer

```
● As We saw MAC address can tell about our Device.
● SO , if we changed that we can change our device id.
```
```
● We can use tool called “macchanger” on kali
● 1st turn off the interface you want to change.
```
```
● Turn it on now!
● You can add your specific MAC with -m option
●
```

#### Incognito mode

```
● This is a mode that browsers have.
● This will help you to have a browser with out logging your history,cookies,cache,..
● This will help you when you are try to surf some site but if you dont need the site to know
your identity, you can use this because it doesnt have any recording process.
```

#### Secure OS

```
● This are Operating systems, that have a security and privacy feature.
● Windows and Mac OS will record some of your activity also they are not
good on privacy and security.
● There for the always Best OS Linux is always recommended when you
think about privacy and Security.
```

#### Temporary mail

● While You do some pentest you dont have to
expose your email and profile for this purpose
u need fake emails,
● but if you dont have to time create one you
can use fake email providers.
● https://temp-mail.org/


#### Exercise 1 5 min

1. Interact with torghost
2. Change your mac to 00:d0:70:00:20:69
3. Create a fake email


### True anonymity is hard

● Every server you connect to on the internet — be it a web server, a mail server, or a VPN
server — can see your IP address. This is a number that uniquely identifies your internet
connection and can be easily traced back to you. Achieving true anonymity on the internet
therefore requires good operational security (OPSEC) on your part to ensure your real IP
address is not revealed.
● Tools that can hide your IP address and protect anonymity include VPNs and the Tor

anonymity network, but there’s no solution that can guarantee 100% anonymity. Tor is
sometimes considered to be more anonymous than VPNs due to its decentralized nature,
but it comes at the cost of lower performance, ease of use, and stability.
● Full anonymity is difficult because you must always use anonymity tools for all aspects of

```
your online life, as even a temporary lack of anonymity is sufficient to expose your identity.
```

#### DARK WEB

● The dark web is a part of the internet that isn't indexed by search engines.
● You've no doubt heard talk of the “dark web” as a hotbed of criminal activity
● It is unique type of internet world.
● Their link ends with .onion , this is because it uses TOR networks.
● Also this kinds of links won’t be opened by normal browser.
● For this purpose wr need a special .onion reading browser,
○ Example: Tor browser.
● Many kinds of websites are there.
○ You can buy credit card numbers, all manner of drugs, guns, counterfeit money, stolen
subscription credentials, hacked Netflix accounts and software that helps you break into
other people’s computers.
○ Buy login credentials to a $50,000 Bank of America account, counterfeit $20 bills, prepaid
debit cards, or a “lifetime” Netflix premium account.
○ You can hire hackers to attack computers for you. You can buy usernames and passwords.
● Also there are emailing service sites and normal facebook too(but more secured).
● As you see This side of internet is little bit dangerous because a lot of evil hackers are
there.
● For this purpose we have to change our identity, so we use Anonymity.
● ALSO REMEMBER YOUR ISP WONT ALLOW YOU TO ACCESS IT.


#### sTARTING.

● There are Specific OS that are
planned and Made for darkweb
access.
● Like,
○ Tails OS
○ Whonix OS
○ Qube OS
● We can use these OS for more
Anonymity, but still the dark web sites
are not easy to find.
● Also TOR browser is so slow, based on
your internet speed, it might not show
you the correct result. ● Tails OS is a Linux Based OS, that on USB drivers only. It flashes anything after you shutdown the PC, also Connets to Tor network authomatically
when it is turned on



#### Tor Browser

This is How Tor browser looks it is
almost same with firefox but this have
more privacy settings.


#### Hidden wiki


#### sites...


#### DOS and DDOS Attacks

● **DoS is short for Denial-of-Service attacks.**
● **DDoS stands for Distributed Denial-of-Service attack**.
● It's used to crash a website by overwhelming the network with access requests from a
computer. This method also crashes a targeted website and makes it unavailable to legitimate
users.(like Mac spoofing)
● It is purposeful attack
● On DDOS, the request will be sent from DIfferent Computers/hosts this will make the attack
harder.
● IT is Highly illegal!
● Techniques:
○ SYN floods
■ Sending lots of SYN
○ Service Request floods
■ Create many connections
○ Application level DOS
■ Exploiting vulns like
● Buffer Overflow
● SQL injection


#### Tools For DOS

1. SolarWinds Security Event Manager (SEM)
2. ManageEngine Log360
3. HULK
4. Tor’s Hammer
5. Slowloris
6. LOIC
7. Xoic
8. DDOSIM
9. RUDY
10. PyLoris


#### Prevention ways

```
● Have you seen Cloudflare, These pages are One of the prevention
ways.
```
● Limit or shut off broadcast forwarding where

possible

● Set up firewalls

● Eliminate and patch known vulnerabilities

● Monitor network inbound traffic




