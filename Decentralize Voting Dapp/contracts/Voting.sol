pragma solidity ^0.6.6;

contract Election{
    string public winner = "DRAW";
    address owner = msg.sender;
    
    struct Candidate{
        uint id;
        string name;
        uint voteCount;
    }
    
    mapping (uint => Candidate) public candidates;
    uint public candidatecount;
    mapping (address => bool) public voter;
    
    event eventVote(
        uint indexed _candidateid
        );
    
    constructor() public{
        addCandidate("Trump");
        addCandidate("Biden");
        state();
    }
    
    function state() public view returns ( bool ) {
        if(msg.sender == owner){
            return  true;
        }else{
            return false;
        }
    }
    
    function addCandidate(string memory _name) private{
        candidatecount++;
        candidates[candidatecount] = Candidate(candidatecount, _name, 0);
    }
    
    function vote(uint _candidateid) public{
        require(!voter[msg.sender]);
        require(_candidateid > 0 && _candidateid <= candidatecount);
        voter[msg.sender] = true;
        candidates[_candidateid].voteCount++;
        emit eventVote(_candidateid);
        win(_candidateid);
    }
    
    function win(uint _candidateid) public returns ( string memory ) {
        uint x = candidates[_candidateid].voteCount;
        uint y = candidates[_candidateid].voteCount;
        if(x == y) {
            winner = "Draw";
        } else {
            if (x > y) {
                winner = candidates[_candidateid].name;
            } else {
                winner = candidates[_candidateid].name;
            }
        }
        return winner;
    }

    function shutdown() public returns ( string memory ) {
        require(msg.sender == owner);
        selfdestruct(msg.sender);
        return winner;
    }
}