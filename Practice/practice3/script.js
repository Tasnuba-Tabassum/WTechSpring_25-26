function getAge()
{
    let ageinput=document.getElementById("age").value;
    let ageMessage=document.getElementById("ageError");
    if(ageinput<40)
    {   
        ageMessage.innerHTML="You are the youngsters of this community";
        ageMessage.style.color="black";
} 
else if(ageinput > 40 && ageinput < 50)
{
    ageMessage.innerHTML="You are the youngsters of this community";
    ageMessage.style.color="red";
}
else
    {
    ageMessage.innerHTML="Top level members of the group";
    ageMessage.style.color="black";
}
}