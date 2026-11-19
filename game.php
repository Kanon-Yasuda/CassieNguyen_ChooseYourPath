<?php

session_start();
$choice = $_POST["choice"] ?? "";

?>

<!DOCTYPE html>
<html>
<body>

<h1>Choose Your Path</h1>

<p>You sit on a quiet train. It is late since you decided to stay out to finish your homework. You lay your head against one of the hand rails and sigh.</p>

<p>"... Why am I doing this?"</p>

<p>Even though you have a nice life, you can't help but feel disgruntled with it. You chose your major and career based off of what your teachers thought would suit you, but really you didn't have much passion for that field. Actually, you don't have much passion for any field.</p>

<p>The train stops and you grab your belongings.</p>

<p>"... Ahh I forgot my headphones..."</p>

<p>Another failing within your life. Well, not much you can do about it now. The library is closed and going back will take another half hour, so you might as well just go home. Not to mention, they were pretty cheap and bad quality. It is okay, it doesn't matter, you tell yourself.</p>

<p>Leaving the train station, you can't help but notice how quiet everything is at this time. Usually, when you get back here, there would be a few kids running around laughing or old people talking to each other. It is pretty scary when it is dark out and there is no one around. The nice thing about small towns like this, though, is that it is quieter, so you get to use the peace to focus on reading some of your favorite books. Not to mention, with how far it is from anything, the rent i--</p>

<h2>CRASH!</h2>

<p>"Heh?"</p>

<p>Strange. There was something loud over there. It sounded very big, but it didn't sound like an object. Did someone fall? If someone fell and died, that would be really bad. God, if you woke up and realized someone died because you didn't go and call help, how will you live with yourself? No, no, what if there is a fight or someone dangerous is over there? Going over to a strange sound is how people die or get kidnapped or beaten.</p>

<p>"... I am sure they are fine ... right ...?"</p>

<p>For some reason you get this immense sense of dread. If you go over there, you will die. You can't place the feeling, but it is overwhelming.</p>

<h2>MAKE A CHOICE</h2>

<form method="POST">
<button type="submit" name="choice" value="investigate">Investigate the noise</button>
<button type="submit" name="choice" value="leave">Ignore it and go home</button>
</form>

<?php elseif ($choice == "investigate"): ?>

<p>You decided to go closer to the source of the crash.</p>

<p>"...um excuse me. Is anyone is here? Is everything alrig--"</p>

<p>There was a white-haired woman laying on some now broken boxes. She looks injured.</p>

<p>"...Ugh. Get out of here... I am fine..."</p>

<p>She struggles to get up.</p>

<p>"But you are hurt! Hang on, let me call someone. We can take you to the nearest hospital and..."</p>

<p>You trail off as you hear some kind of clanking noise. It draws closer and closer until...</p>

<p>There was a monster. Roughly 10 feet tall with huge claws and teeth.</p>

<p>"I TOLD YOU, GET OUT NOW!"</p>

<p>The woman leaps in front of you and produces a sword out of thin air. She blocks the attack but it is obvious she cannot keep fighting for long.</p>

<h2>CHOICE</h2>

<form method="POST">
<button type="submit" name="choice" value="leave">LEAVE</button>
<button type="submit" name="choice" value="stay">STAY</button>
</form>

<?php elseif ($choice == "leave"): ?>

<p>You decide it is better not to get involved. You turn around and start running home.</p>

<p>"... I don't want to die. I don't want to die!"</p>

<p>After running for sometime, you made it to your home. You throw your shoes off and rush into bed. Surely it was all a dream.<p/>

<p>The next morning you see nothing at the site. No sighs of that monster or that woman. It truly was like it never happened. No, maybe it really never did.</p>

<p>For the next couple of years, you live a normal life where you did your work, found a job, and lived like any other person. Quite the boring life, but it is nice. Though there is a part of you that wishes life could be a little bit more.</p>


<?php elseif ($choice == "leave"): ?>

<h2>And so your ordinary life continues</h2>

<?php elseif ($choice == "stay"): ?>

<?php elseif ($choice == "stay"): ?>

<p>You decided to stay, but you are frozen in fear.</p>

<p>You want to help her. You really do. But what are you supposed to do against something like that? You don't even have anything to defend yourself with.</p>

<p>"I can't let you die here!"</p>

<p>"God, you are so--"</p>

<p>Before she can finish her sentence, the monster swings its enormous claw and sends her flying. She crashes into the wall, dropping her sword.</p>

<p>"Hey! Are you okay?!"</p>

<p>She doesn't respond.</p>

<p>The monster slowly turns toward you. Its heavy footsteps echo through the empty street as it begins to close in.</p>

<p>You look back at the woman. She is still moving, but barely. You look at the monster, then back at her.</p>

<p>What are you supposed to do?</p>

<p>You can't fight that thing. You can't even protect yourself. Running away would probably be the smartest decision. Sadly, you DIDN'T do that. You are closed in and there is a hungry looking weird clawy teethy thing in front of you.</p>

<p>No. Getting mad at yourself if the last thing that can help you right now. Even if you die here, at least you can try to do something.</p>

<p>You take a deep breathe.</p>

<p>"...Damn it!"</p>

<p>You run toward the woman and try to pull her away. The monster notices and begins moving faster.</p>

<p>You look up. It is getting closer and closer.</p>

<p>This is it, isn't it?</p>

<p>You are going to die here. In some random street, on an ordinary night, because you decided to do something stupid.</p>

<p>You close your eyes and prepare for the worst.</p>

<p>But then suddenly you hear the monster recoil in pain.</p>

<p>You open your eyes and see a small magical orb floating in the air. It glows brightly, almost as if it is waiting for you to reach out and touch it.</p>

<p>"...What?"</p>

<p>"Don't touch that!"</p>

<p>You turn toward the woman. Somehow, she has managed to get back up, although she can barely stand.</p>

<p>"Listen to me! Whatever you do, don't grab that orb!"</p>

<p>"But what is it?!"</p>

<p>"If you accept it, you will become a hero. You'll gain the power to fight monsters, but you won't be able to go back to your ordinary life!"</p>

<p>"...What?"</p>

<p>"Ugh... You'll have to keep fighting. No matter how tired you are, no matter how much it hurts. Once you accept it, you can't just walk away!"</p>

<p>You stare at her in disbelief.</p>

<p>A hero?</p>

<p>...What is she even talking about? Is this some kind of anime?</p>

<p>You don't have time to ask any more questions. The monster is already right in front of you. The woman, struggling to speak, yells one more thing at you.</p>

<p>"JUST RUN!"</p>

<p>But where are you supposed to run? You look at the orb again. It is your only chance. You don't know what will happen if you touch it, but you know what will happen if you don't.</p>

<p>You reach out.</p>

<p>"...I'm sorry."</p>

<p>The moment your fingers touch the orb, a bright light surrounds your body. You feel something rush through you. It is warm, almost comforting, but there is something overwhelming about it too. You take a deep breathe, and the light begins to form something in your hand.</p>

<p>A wand.</p>

<p>You stare at it, completely confused. It looks just like something from a kid show.</p>

<p>"...What is this?"</p>

<p>"Move!"</p>

<p>You barely manage to turn around before the monster attacks.</p>

<p>Without thinking, you raise the wand.</p>

<p>A powerful flash of light bursts from its tip. The force sends the monster flying backward, crashing into the street with a deafening noise.</p>

<p>For a moment, everything goes quiet.</p>

<p>You stare at your wand.</p>

<p>You stare at the monster, but there is nothing there. All the broken items have suddenly been fixed. Maybe it was all a dream?</p>

<p>Then you stare at your own hands.</p>

<p>"...I did that?"</p>

<p>The woman slowly approaches you, still holding her injured side.</p>

<p>"You accepted the contract..."</p>

<p>You look at her.</p>

<p>"Wait. What do you mean? Contract?"</p>

<p>She doesn't answer immediately.</p>

<p>"...You are now a warrior. A hero."</p>

<p>Your stomach drops.</p>

<p>"Huh?"</p>

<p>"You're a hero now. That means you'll have to fight. There will be more monsters, and you will be expected to stop them."</p>

<p>You look down at the wand in your hand.</p>

<p>Just a few minutes ago, you were worried about going home late. You were thinking about your homework, your forgotten headphones, and what you would eat for dinner. Hell, you were thinking about whether or not you wanted to buy a new game. That was your biggest worry before.</p>

<p>Now, you have apparently become some kind of magical hero! Great! Your lame life has now became a life of great danger!</p>

<p>You didn't ask for this.</p>

<p>You didn't want this.</p>

<p>"...What have I gotten myself into?"</p>

<p>The woman looks at you with a tired expression.</p>

<p>"Welcome to our world."</p>

<p>And just like that, your ordinary life is over.</p>

<form method="POST">
<button type="submit" name="choice" value="training">Continue</button>
</form>


<?php elseif ($choice == "training"): ?>

<p>The woman introduces herself as a hero who has been fighting monsters for years. She worked solo before, but has had friends she used to fight with. She explains that the orb chose you because you were chosen. So that means you did something or there was something in you that made your worthy of becoming a hero.</p>

<p>You follow her to a small building hidden behind an old shopping street. Apparently, this is where she stays between missions.</p>

<p>"...So, what happens now?"</p>

<p>"Well, first, you need to learn how to use your magic."</p>

<p>"Can't I just... go home?"</p>

<p>She gives you a strange look.</p>

<p>"Well you have to know how to fight. I might not be able to come help you if you are in danger. You have to be ready for anything. Why did you become a hero if you aren't ready for that?"</p>

<p>"...I was kind of busy trying not to die."</p>

<p>She sighs.</p>

<p>"Listen. Monsters will continue appearing around this town. If you don't fight them, innocent people will get hurt. You have the power to stop that now."</p>

<p>You look down at your wand.</p>

<p>It still feels strange holding it. A few hours ago, you were just an ordinary student. Now, apparently, you are responsible for protecting an entire town.</p>

<p>"...And what if I don't want to?"</p>

<p>The woman doesn't answer immediately.</p>

<p>"...Then someone else will have to pay for it."</p>

<p>You don't really know what to say to that.</p>

<p>You just wanted to go home.</p>

<form method="POST">
<button type="submit" name="choice" value="new_life">Continue</button>
</form>


<?php elseif ($choice == "new_life"): ?>

<p>The next few weeks are difficult. You learn that being a hero is not as simple as waving a wand and defeating monsters. You have to practice controlling your magic, learn how to defend yourself, and figure out how to fight creatures that are much stronger than you.</p>

<p>Sometimes you win. Sometimes you don't.</p>

<p>There are days when you come home covered in bruises, unable to sleep because you keep remembering the sounds of monsters attacking.</p>

<p>And yet, the next morning, you still have to go to school.</p>

<p>You still have homework to finish. You still have responsibilities. You still have to pretend everything is normal.</p>

<p>When your classmates ask why you look so tired, you make excuses.</p>

<p>When your teachers ask why your assignments are late, you apologize.</p>

<p>When your friends ask if you want to hang out, you say you are busy.</p>

<p>You can't tell anyone.</p>

<p>How would you even explain it?</p>

<p>"Sorry, I can't come because I have to fight monsters tonight."</p>

<p>Yeah, that would go well.</p>

<p>The white-haired woman doesn't seem to understand your problem.</p>

<p>"You're late."</p>

<p>"...Sorry. I had an exam today."</p>

<p>"Then you should have planned your time better."</p>

<p>You stare at her.</p>

<p>"...Right."</p>

<p>You want to argue, but you are too tired.</p>

<p>After all, she has been doing this for years. Maybe this is just how things are supposed to be.</p>

<p>You tell yourself that you will get used to it eventually.</p>

<p>You have to.</p>

<form method="POST">
<button type="submit" name="choice" value="lonely">Continue</button>
</form>

<?php elseif ($choice == "lonely"): ?>

<p>Months pass.</p>

<p>You become stronger. Your magic becomes easier to control, and you no longer freeze every time a monster appears.</p>

<p>But things haven't exactly gotten better.</p>

<p>You have missed birthdays, school events, and opportunities to spend time with people you care about. Your grades begin to slip, and you find yourself falling asleep during class.</p>

<p>You try your best to keep everything together.</p>

<p>You really do.</p>

<p>But no matter how hard you work, something always seems to go wrong.</p>

<p>One night, after a particularly difficult fight, you return home with an injured arm.</p>

<p>You sit on your bed and stare at the ceiling.</p>

<p>"...I'm so tired."</p>

<p>Your phone lights up.</p>

<p>It is a message from a friend asking if you want to meet up this weekend. You look at the message for a while before typing a reply.</p>

<p>"Sorry, I have something to do."</p>

<p>You put your phone down. It is a small thing. Just another plan you have to cancel. But somehow, it hurts more than you expected. It feels like you are losing out on what made you who you were before. It feels like you are losing your friends. God, you remember how you and two of your two friends would stay up all night ranking in LOL. What a horrible time. You miss it.</p>

<p>You started to wonder if anyone would even notice if you stopped showing up.</p>

<p>Would anyone know how much you have sacrificed?</p>

<p>Would anyone understand?</p>

<p>You shake your head.</p>

<p>It doesn't matter.</p>

<p>As long as people are safe, that should be enough.</p>

<p>Right?</p>

<form method="POST">
<button type="submit" name="choice" value="breaking">Continue</button>
</form>

<?php elseif ($choice == "breaking"): ?>

<p>One evening, you receive a mission from the white-haired woman.</p>

<p>A particularly dangerous monster has appeared near a residential area. She tells you to wait for her before engaging it.</p>

<p>But when you arrive, you see people running away. A child is crying nearby. The monster is approaching.</p>

<p>You look around.</p>

<p>Where is she?</p>

<p>You try calling her, but there is no answer.</p>

<p>You know you should wait. You know you are not strong enough to fight something like this alone. But what happens if you do nothing?</p>

<p>You tighten your grip around your wand.</p>

<p>"...Please."</p>

<p>You run forward.</p>

<p>The fight is horrible.</p>

<p>You manage to protect the people nearby, but you take several serious hits. Your magic is running low, and your body is barely able to move.</p>

<p>Eventually, you manage to defeat the monster.</p>

<p>You collapse onto the ground.</p>

<p>For a while, you just lie there, staring at the sky.</p>

<p>You did it.</p>

<p>Everyone is safe.</p>

<p>You should be happy.</p>

<p>But you aren't.</p>

<p>Your entire body hurts. Your clothes are torn, your hands are shaking, and you can barely breathe.</p>

<p>You hear footsteps approaching.</p>

<p>It is the white-haired woman.</p>

<p>"What were you thinking?! I told you to wait!"</p>

<p>You look up at her.</p>

<p>"...I couldn't."</p>

<p>"You could have gotten yourself killed!"</p>

<p>"I know."</p>

<p>"Then why would you do something so stupid?!"</p>

<p>You lower your head.</p>

<p>"...Because someone had to."</p>

<p>She goes quiet.</p>

<p>You wait for her to say something else. Maybe that you did well. Maybe that she is glad you are okay.</p>

<p>But instead, she turns away.</p>

<p>"We need to leave. There could be more monsters."</p>

<p>You stare at her back.</p>

<p>"...Okay."</p>

<p>You slowly get up.</p>

<p>You don't complain.</p>

<p>You don't cry.</p>

<p>You just follow her.</p>

<p>And for some reason, that makes you feel even worse.</p>

<form method="POST">
<button type="submit" name="choice" value="final_choice">Continue</button>
</form>

<h2>The Choice</h2>

<p>That night, you return home alone.</p>

<p>You sit on your bed and look at your wand.</p>

<p>You remember how excited you were when you first received it. You thought becoming a hero would make your life more meaningful.</p>

<p>You thought you would finally have something you could be passionate about.</p>

<p>But now...</p>

<p>You don't know anymore.</p>

<p>You are tired of fighting.</p>

<p>Tired of pretending.</p>

<p>Tired of being told that you have to keep going.</p>

<p>You look at your phone. There are several unanswered messages.</p>

<p>You haven't spoken to some of your friends in weeks.</p>

<p>You haven't had a proper day off in months.</p>

<p>You can't remember the last time you did something just because you wanted to.</p>

<p>"...What am I even doing?"</p>

<p>You look down at your hands.</p>

<p>You wanted your life to change.</p>

<p>Well, it certainly did.</p>

<p>But is this really what you wanted?</p>

<h2>MAKE A CHOICE</h2>

<form method="POST">
<button type="submit" name="choice" value="give_up">Give up</button>
<button type="submit" name="choice" value="continue">Keep fighting</button>
</form>


<?php elseif ($choice == "give_up"): ?>

<h2>ENDING: Giving Up</h2>

<p>You decide that you can't do this anymore.</p>

<p>You put your wand down.</p>

<p>For once, you don't answer the call when the woman contacts you.</p>

<p>You don't go to the next mission.</p>

<p>You don't even bother making an excuse.</p>

<p>You just want to rest.</p>

<p>At first, it feels nice.</p>

<p>You sleep in. You spend time at home. You start doing ordinary things again.</p>

<p>But the peace doesn't last.</p>

<p>You know that monsters are still appearing. You know that people are still getting hurt.</p>

<p>You try to ignore it.</p>

<p>You tell yourself that someone else can handle it.</p>

<p>After all, why should it always be you?</p>

<p>But the guilt never really goes away.</p>

<p>Days turn into weeks.</p>

<p>You stop answering the woman's messages. Eventually, she stops contacting you too.</p>

<p>You hear news about strange accidents around town. Sometimes you wonder if you could have prevented them.</p>

<p>You try not to think about it.</p>

<p>One night, you find yourself looking at the wand again.</p>

<p>You remember the first time you used it.</p>

<p>You remember thinking that maybe, just maybe, your life could become something more.</p>

<p>You laugh a little.</p>

<p>"...What a joke."</p>

<p>You put it away.</p>

<p>You return to your ordinary life.</p>

<p>But this time, it doesn't feel peaceful.</p>

<p>It just feels empty.</p>

<h2>And so, the hero disappears.</h2>


<?php elseif ($choice == "continue"): ?>

<h2>ENDING: Becoming a True Hero</h2>

<p>You look at your wand for a long time.</p>

<p>You think about everything that has happened.</p>

<p>The injuries. The missed opportunities. The loneliness.</p>

<p>You think about how unfair everything has been.</p>

<p>And honestly?</p>

<p>You are still angry.</p>

<p>You still don't want to fight monsters every day. You still wish you could go back to your old life.</p>

<p>But then you remember something.</p>

<p>You didn't become a hero because you wanted to be special.</p>

<p>You became one because someone needed help.</p>

<p>And even though you have suffered, there were people who made it home safely because you were there.</p>

<p>You slowly get up.</p>

<p>"...I don't want to keep living like this."</p>

<p>You look at your wand again.</p>

<p>"But I don't want to give up either."</p>

<p>For the first time, you realize something.</p>

<p>Being a hero doesn't mean you have to sacrifice everything.</p>

<p>You don't have to pretend that you are okay.</p>

<p>You don't have to handle everything alone.</p>

<p>And you don't have to measure your worth by how much you can endure.</p>

<p>You are allowed to rest.</p>

<p>You are allowed to ask for help.</p>

<p>You are allowed to have a life outside of being a hero.</p>

<p>The next morning, you decide to talk to the white-haired woman.</p>

<p>You tell her that you cannot keep going the way things are. You tell her that you need time to recover, and that you want to learn how to fight without destroying yourself in the process.</p>

<p>She listens quietly.</p>

<p>"...I see."</p>

<p>It isn't a perfect conversation. She doesn't suddenly understand everything.</p>

<p>But it is a start.</p>

<p>You begin making small changes.</p>

<p>You learn to ask for help during difficult missions. You make time for your friends again. You stop treating every mistake as proof that you aren't good enough.</p>

<p>There are still difficult days.</p>

<p>There are still monsters.</p>

<p>And there are still times when you wonder if you are doing enough.</p>

<p>But you keep going.</p>

<p>Not because you are forced to.</p>

<p>Not because you think your life only matters when you are helping someone else.</p>

<p>You keep going because you want to.</p>

<p>One evening, you sit on the same train where everything started.</p>

<p>It is late again.</p>

<p>You lean your head against the handrail and look out the window.</p>

<p>"...I wonder what I would have done if I had gone straight home that night."</p>

<p>You smile a little.</p>

<p>You still don't have everything figured out.</p>

<p>You still don't know what you want to do with your future.</p>

<p>But for once, that doesn't bother you as much.</p>

<p>You don't need to have everything planned out.</p>

<p>You don't need to be perfect.</p>

<p>And you don't need to be someone else to be worth something.</p>

<p>You look down at your hands.</p>

<p>The same hands that once trembled in fear now hold your wand with confidence.</p>

<p>You are still scared sometimes.</p>

<p>You are still tired sometimes.</p>

<p>But you are here.</p>

<p>And that is enough.</p>

<h2>And so, you learn what it truly means to be a hero.</h2>

<?php endif; ?>
</body>
</html>