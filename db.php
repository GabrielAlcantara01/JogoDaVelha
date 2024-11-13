CREATE TABLE games (
    id INT AUTO_INCREMENT PRIMARY KEY,
    player1 VARCHAR(255),
    player2 VARCHAR(255),
    board_state VARCHAR(9), -- "---------", "XOXOXOXOX", etc.
    current_turn CHAR (1), -- 'X' or 'O'
    winner CHAR(1), -- 'x', 'O', or NULL if ongoing
    created_at TIMESTAMP DEAFAULT CURRENT_TIMESTAMP
)